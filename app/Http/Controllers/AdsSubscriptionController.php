<?php

namespace App\Http\Controllers;

use App\Http\Resources\EloquentResource;
use App\Interfaces\AdsSubscriptionRepositoryInterface;
use App\Models\Ads\Ads;
use App\Models\Ads\AdsReview;
use App\Models\Ads\AdsSubscription;
use App\Models\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdsSubscriptionController extends ApiController
{
//    protected AdsSubscriptionRepositoryInterface $adsSubscriptionRepository;
//
//    /**
//     * @param AdsSubscriptionRepositoryInterface $adsSubscriptionRepository
//     */
//    public function __construct(AdsSubscriptionRepositoryInterface $adsSubscriptionRepository)
//    {
//        $this->adsSubscriptionRepository = $adsSubscriptionRepository;
//    }


    public function index(){
        return $this->success('My Ads Subscriptions',[
            'items'=> new EloquentResource(Auth::guard('api')->user()->ads_subscriptions)
        ]);
    }

    public function allItems(User $user){
        return $this->success('Ads Subscriptions',[
            'items'=> new EloquentResource($user->ads_subscriptions)
        ]);
    }

    public function subscribeAds(Ads $ads){
        if (count(Auth::guard('api')->user()->ads_subscriptions) >= config('settings.max_ad_choice') ){
            return $this->error('You have reached max ad choice limit');
        }
        $ads->subscribers()->sync([Auth::guard('api')->id()]);
        return $this->success('Subscription success');
    }

    public function unsubscribeAds(Ads $ads){
        $ads->subscribers()->detach([Auth::guard('api')->id()]);
//        $adsReview = AdsReview::where('user_id',Auth::guard('api')->id())->where('ads_id',$ads->id)->first();
//        $adsReview?->delete();
        return $this->success('Subscription Canceled');
    }

    public function submitRating(Request $request){
        $adsReview = AdsReview::where('ads_id',$request->id)->where('user_id',Auth::guard('api')->id())->first();
        if (!isset($adsReview)){
            $adsReview = new AdsReview();
        }
        $adsReview->ads_id = $request->id;
        $adsReview->user_id = Auth::guard('api')->id();
        $adsReview->rating = $request->rating;
        $adsReview->save();
        return $this->success('Review submitted');
    }

}
