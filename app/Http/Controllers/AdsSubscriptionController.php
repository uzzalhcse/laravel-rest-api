<?php

namespace App\Http\Controllers;

use App\Http\Resources\EloquentResource;
use App\Interfaces\AdsSubscriptionRepositoryInterface;
use App\Models\Ads\Ads;
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
            'items'=> new EloquentResource(Auth::user()->ads_subscriptions)
        ]);
    }

    public function subscribeAds(Ads $ads){
        $ads->subscribers()->sync([Auth::id()]);
        return $this->success('Subscription success');
    }

    public function unsubscribeAds(Ads $ads){
        $ads->subscribers()->detach([Auth::id()]);
        return $this->success('Subscription Canceled');
    }

}
