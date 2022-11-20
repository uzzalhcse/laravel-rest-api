<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuditionRequest;
use App\Http\Resources\EloquentResource;
use App\Models\Ads\Ads;
use App\Models\Ads\Audition;
use App\Models\Ads\AuditionHistory;
use App\Models\Auth\User;
use App\Models\Share\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuditionController extends ApiController
{

    public function virtualCall(AuditionRequest $request){

        $user = User::where('mobile',$request->mobile)->firstOrFail();
        $ads = $user->ads_subscriptions;
        $ad = Ads::findOrFail($request->ads_id);
        if (!count($ads) || !in_array($ad->id,$ads->pluck('id')->toArray())){
            return $this->error('Invalid Ads',[$ads]);
        }


        $remainingAuditionLimit = $ad->owner->advertisement_package->audition_limit - $ad->owner->ads_audition->where('package_id',$ad->owner->advertisement_package->package_id)->count();
        $cpa = $ad->owner->advertisement_package->package->cpa;
        if (!$ad->owner->advertisement_package->is_active){
            return $this->error('Advertiser Package is not active',$ad->owner->advertisement_package);
        }
        if ($remainingAuditionLimit<1){
            return $this->error('Advertiser reached maximum audition limit');
        }



//        return $this->success('Selected Property for Virtual Call',[
//            'mobile'=>$user->mobile,
//            'ads'=>$ad->title,
//            'cpa'=>$ad->owner->advertisement_package->package->cpa,
//            'audition_limit'=>$ad->owner->advertisement_package->audition_limit,
//            'remaining_audition_limit'=>$remainingAuditionLimit,
//        ]);

        /*
         * user will (1) earn 50% and (2) provider 25% and system 25% from ads CPA
         * */
        DB::beginTransaction();
        try {
            $auditionHistory = new Audition();
            $auditionHistory->user_id = $user->id;
            $auditionHistory->ads_id = $ad->id;
            $auditionHistory->advertiser_id = $ad->owner->id;
            $auditionHistory->provider_id = $ad->providers->first()->id;
            $auditionHistory->package_id = $ad->owner->advertisement_package->package_id;
            $auditionHistory->mobile = $user->mobile;
            $auditionHistory->cpa = $cpa;
            $auditionHistory->save();

            /*(1)
             *
             * User/Publisher Earning 50%
             *
             * */

            $auditionEarning = new AuditionHistory();
            $auditionEarning->audition_id = $auditionHistory->id;
            $auditionEarning->user_id = $user->id;
            $auditionEarning->amount = get_percentage($cpa,50);
            $auditionEarning->is_pending = 1;
            $auditionEarning->save();

            /*(2)
             *
             * Provider earning 25%
             * */
            $auditionEarning = new AuditionHistory();
            $auditionEarning->audition_id = $auditionHistory->id;
            $auditionEarning->user_id = $ad->providers->first()->id;
            $auditionEarning->amount =  get_percentage($cpa,25);
            $auditionEarning->is_pending = 1;
            $auditionEarning->save();


            DB::commit();
            return $this->success('Virtual Call Generated',[
                'mobile'=>$user->mobile,
                'ads'=>$ad->title,
                'cpa'=>$ad->owner->advertisement_package->package->cpa,
                'audition_limit'=>$ad->owner->advertisement_package->audition_limit,
                'remaining_audition_limit'=>$remainingAuditionLimit,
                'auditionHistory'=>$auditionHistory,
            ]);
        } catch (\Exception $exception){
            DB::rollBack();
            return $this->error($exception->getMessage());
        }
    }


    public function myEarningHistory(Request $request){
        $items = AuditionHistory::where('user_id',Auth::guard('api')->id())->latest();

        return $this->success('My Earning History',[
            'items'=> new EloquentResource(paginate_if_required($items))
        ]);
    }
    public function myAdsReports(Request $request){
//        $auditions = Auth::guard('api')->user()->ads->load('auditions.provider','auditions.advertiser','auditions.publisher')->map->auditions->flatten();
        $auditions = Audition::with('provider','advertiser','publisher')
            ->whereIn('ads_id',Auth::guard('api')->user()->ads->pluck('id')->toArray())
            ->latest();
        return $this->success('Audition Reports',[
            'items'=> new EloquentResource(paginate_if_required($auditions))
        ]);
    }
    public function allAdsReports(Request $request, User $user){
        $auditions = Audition::with('provider','advertiser','publisher')
            ->whereIn('ads_id',$user->ads->pluck('id')->toArray())
            ->latest();
        return $this->success('All Audition Reports',[
            'items'=> new EloquentResource(paginate_if_required($auditions))
        ]);
    }

    public function myMediaFiles(){
//        $user = User::with('ads.media','billboards.media')->find(Auth::guard('api')->id());
//        $adsMedia = $user->ads->sortByDesc('updated_at')->take(6)->pluck('media')->flatten();
//        $billboardMedia = $user->billboards->sortByDesc('updated_at')->take(12)->pluck('media')->flatten();
//        $totalAds = $user->ads->pluck('media')->flatten()->count();
//        $totalBillboard = $user->billboards->pluck('media')->flatten()->count();


        $user = Auth::guard('api')->user();
        $media = Media::with('mediable');
        if (!is_admin()){
            $media = $media->whereHas('mediable', function ($q) use ($user) {
                $q->where('user_id',$user->id);
            });
        }

        $media = $media->latest('updated_at');
        $adsMedia = $media->get()->where('mediable_type','App\Models\Ads\Ads');
        $billboardMedia = $media->get()->where('mediable_type','App\Models\Ads\Billboard');


        $totalBillboard = $billboardMedia->count();
        $totalAds = $adsMedia->count();
        return $this->success('My latest Media files',[
            'total_ads'=>$totalAds,
            'total_billboard'=>$totalBillboard,
            'ads'=>$adsMedia->take(6)->map->formatResponse(),
            'billboards'=>$billboardMedia->take(6)->map->formatResponse(),
        ]);
    }
    public function myMediaFilesByType($type){
        $user = Auth::guard('api')->user();
        $media = Media::with('mediable');
        if (!is_admin()){
            $media = $media->whereHas('mediable', function ($q) use ($user) {
                $q->where('user_id',$user->id);
            });
        }
        if ($type == 'images'){
            $media = $media->whereIn('media_type',['banner', 'thumbnail']);
        } else{
            $media = $media->where('media_type',$type);
        }

        $media = $media->latest('updated_at')
            ->paginate(config('settings.pagination.max_per_page'));
        return $this->success('All Media files by types',[
            'items'=>new EloquentResource($media)
        ]);
    }
}
