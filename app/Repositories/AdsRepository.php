<?php

namespace App\Repositories;

use App\Interfaces\AdsRepositoryInterface;
use App\Models\Ads\Ads;
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

    /**
     * @param Request $request
     * @return Model|null
     */
    public function store(Request $request): ?Model
    {
        DB::beginTransaction();
        try {

            $ads = new Ads();
            $ads->user_id = Auth::id();
            $ads->title = $request->title;
            $ads->description = $request->description;
            $ads->male_age_range = $request->male_age_range;
            $ads->female_age_range = $request->female_age_range;
            $ads->preferred_gender = $request->preferred_gender;
            $ads->status_id = 2;
            $ads->save();
            $ads->countries()->attach(explode(',',$request->country_ids));
//            $ads->providers()->attach(explode(',', $request->provider_ids));

            $thumbnail = upload_file($request,'thumbnail_file','/media/thumbnail/');
            $banner = upload_file($request,'banner_file','/media/banner/');
            $audio = upload_file($request,'audio_file','/media/audio/');
            $ads->media()->create([
                'path'=>$thumbnail,
                'media_type'=>'thumbnail',
            ]);
            $ads->media()->create([
                'path'=>$banner,
                'media_type'=>'banner',
            ]);
            $ads->media()->create([
                'path'=>$audio,
                'media_type'=>'audio',
            ]);
            DB::commit();
            return $ads;

        } catch (\Exception $exception){
            Log::info($exception);
            DB::rollBack();
            return null;
        }

    }


    /**
     * @return mixed
     */
    public function myAds(): mixed
    {
        $items = $this->model::latest();
        if (is_advertiser()){
            $items = $items->advertiser();
        }
        if (isset(request()->page)){ // paginate if request has page query
            $items = $items->paginate(config('settings.pagination.per_page'));
        } else{
            $items = $items->take(20)->get();
        }
        return $items;
    }

}
