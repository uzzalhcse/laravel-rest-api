<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuditionRequest;
use App\Http\Resources\EloquentResource;
use App\Models\Ads\Ads;
use App\Models\Ads\Audition;
use App\Models\Ads\AuditionHistory;
use App\Models\Auth\User;
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


        $remainingAuditionLimit = $ad->owner->advertisement_package->audition_limit - $ad->owner->ads_audition->count();
        $cpa = $ad->owner->advertisement_package->package->cpa;
        if (!$ad->owner->advertisement_package->is_active){
            return $this->error('Advertiser Package is not active');
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
            $auditionHistory->mobile = $user->mobile;
            $auditionHistory->cpa = $cpa;
            $auditionHistory->save();

            /*(1)
             *
             * User/Publisher Earning 50%
             *
             * */

            $auditionEarning = new AuditionHistory();
            $auditionEarning->audition_history_id = $auditionHistory->id;
            $auditionEarning->user_id = $user->id;
            $auditionEarning->amount = get_percentage($cpa,50);
            $auditionEarning->is_pending = 1;
            $auditionEarning->save();

            /*(2)
             *
             * Provider earning 25%
             * */
            $auditionEarning = new AuditionHistory();
            $auditionEarning->audition_history_id = $auditionHistory->id;
            $auditionEarning->user_id = $ad->providers->first()->id;
            $auditionEarning->amount =  get_percentage($cpa,25);
            $auditionEarning->is_pending = 1;
            $auditionEarning->save();


            DB::commit();
            return $this->success('Selected Property for Virtual Call',[
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
        $items = AuditionHistory::where('user_id',Auth::id())->latest();

        return $this->success('My Earning History',[
            'items'=> new EloquentResource(paginate_if_required($items))
        ]);
    }
    public function myAdsReports(Request $request){
//        $auditions = Auth::user()->ads->load('auditions.provider','auditions.advertiser','auditions.publisher')->map->auditions->flatten();
        $auditions = Audition::with('provider','advertiser','publisher')
            ->whereIn('ads_id',Auth::user()->ads->pluck('id')->toArray())
            ->latest();
        return $this->success('Audition Reports',[
            'items'=> new EloquentResource(paginate_if_required($auditions))
        ]);
    }
}
