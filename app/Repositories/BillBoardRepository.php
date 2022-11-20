<?php

namespace App\Repositories;

use App\Interfaces\BillBoardRepositoryInterface;
use App\Models\Ads\Billboard;
use App\Models\Share\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BillBoardRepository extends BaseEloquentRepository implements BillBoardRepositoryInterface
{
    protected Billboard $billboard;

    /**
     * @param Billboard $billboard
     */
    public function __construct(Billboard $billboard)
    {
        parent::__construct($billboard);
    }

    /**
     * @param Request $request
     * @return Model|null
     */
    public function store(Request $request): ?Model
    {
        DB::beginTransaction();
        try {
            $billboard = new Billboard();
            $billboard->title = $request->title;
            $billboard->user_id = Auth::guard('api')->id();
            $billboard->status_id = Status::InActive;
            $billboard->save();
            $this->handleMedia($request,$billboard);
            DB::commit();
            return $billboard;

        } catch (\Exception $exception){
            Log::info($exception);
            DB::rollBack();
            return null;
        }
    }

    /**
     * @param Request $request
     * @param Model $model
     * @return Model|null
     */
    public function update(Request $request, Model $model): ?Model
    {
        DB::beginTransaction();
        try {
            $model->title = $request->title;
            $model->save();
            $this->handleMedia($request,$model);
            DB::commit();
            return $model;

        } catch (\Exception $exception){
            DB::rollBack();
            return null;
        }
    }


    /**
     * @param Billboard $billboard
     * @param $status
     * @return mixed
     */
    public function updateStatus(Billboard $billboard, $status)
    {
        $statuses = [1,2,3,4];
        if (!in_array($status,$statuses)){
            return false;
        }
        $billboard->status_id = $status;
        $billboard->save();
        return $billboard;
    }

    /**
     * @param Request $request
     * @param Billboard $billboard
     */
    public function handleMedia(Request $request, Billboard $billboard)
    {
        $thumbnail = upload_file($request,'thumbnail_file','/media/thumbnail/');
        if ($thumbnail) $billboard->media()->updateOrCreate(['media_type'=>'thumbnail'],[
            'path'=>$thumbnail,
            'media_type'=>'thumbnail',
        ]);
        return $billboard;
    }
}
