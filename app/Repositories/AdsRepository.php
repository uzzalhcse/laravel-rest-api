<?php

namespace App\Repositories;

use App\Interfaces\AdsRepositoryInterface;
use App\Models\Ads\Ads;
use App\Models\Share\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdsRepository extends BaseEloquentRepository implements AdsRepositoryInterface
{
    protected Ads $ads;

    /**
     * @param Ads $ads
     */
    public function __construct(Ads $ads)
    {
        parent::__construct($ads);
    }

    public function popularItems()
    {
        $items = $this->model::active()->search()->latest();
        if (isset(request()->page)){ // paginate if request has page query
            $items = $items->paginate(config('settings.pagination.per_page'));
        } else{
            $items = $items->take(20)->get();
        }
        return $items->where('rating','>',0);
    }


    /**
     * @param Request $request
     * @return Model|null
     */
    public function store(Request $request): ?Model
    {
        DB::beginTransaction();
        try {

            $ads = new Ads();
            $ads->user_id = Auth::guard('api')->id();
            $ads->title = $request->title;
            $ads->description = $request->description;
            $ads->male_age_range = explode(',', $request->male_age_range);
            $ads->female_age_range = explode(',', $request->female_age_range);
            $ads->preferred_gender = $request->preferred_gender;
            $ads->status_id = Status::Pending;
            $ads->save();
            $ads->countries()->attach(explode(',',$request->country_ids));
            $ads->providers()->attach(explode(',', $request->provider_ids));
            $this->handleMedia($request, $ads);

            DB::commit();
            return $ads;

        } catch (\Exception $exception){
            Log::info($exception);
            DB::rollBack();
            return null;
        }

    }

    /**
     * @param Request $request
     * @param Model $ads
     * @return Model|null
     */
    public function update(Request $request, Model $ads): ?Model
    {
        DB::beginTransaction();
        try {
            $ads->title = $request->title;
            $ads->description = $request->description;
            $ads->male_age_range = explode(',', $request->male_age_range);
            $ads->female_age_range = explode(',', $request->female_age_range);
            $ads->preferred_gender = $request->preferred_gender;
            $ads->save();
            $ads->countries()->sync(explode(',',$request->country_ids));
            $ads->providers()->sync(explode(',', $request->provider_ids));
            $this->handleMedia($request, $ads);
            DB::commit();
            return $ads;

        } catch (\Exception $exception){
            Log::info($exception);
            DB::rollBack();
            return null;
        }
    }

    /**
     * @param Request $request
     * @param Model $ads
     * @return Model
     */
    public function handleMedia(Request $request, $ads)
    {

        $thumbnail = upload_file($request,'thumbnail_file','/media/thumbnail/', $request->title);
        $banner = upload_file($request,'banner_file','/media/banner/', $request->title);
        $audio = upload_file($request,'audio_file','/media/audio/', $request->title);

        if ($thumbnail) $ads->media()->updateOrCreate(['media_type'=>'thumbnail'],[
            'path'=>$thumbnail,
            'media_type'=>'thumbnail',
        ]);
        if ($banner) $ads->media()->updateOrCreate(['media_type'=>'banner'],[
            'path'=>$banner,
            'media_type'=>'banner',
        ]);
        if ($audio) $ads->media()->updateOrCreate(['media_type'=>'audio'],[
            'path'=>$audio,
            'media_type'=>'audio',
        ]);
        return $ads;
    }

    /**
     * @param $status
     * @return mixed
     */
    public function updateStatus(Ads $ads,$status): mixed
    {
        $statuses = [1,2,3,4];
        if (!in_array($status,$statuses)){
            return false;
        }
        $ads->status_id = $status;
        $ads->save();
        return $ads;

    }
}
