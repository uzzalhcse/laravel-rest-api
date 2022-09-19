<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\ApiController;
use App\Http\Requests\AdsRequest;
use App\Http\Resources\EloquentResource;
use App\Interfaces\AdsRepositoryInterface;
use App\Models\Ads\Ads;
use Illuminate\Http\Request;

class AdsController extends ApiController
{
    protected AdsRepositoryInterface $adsRepository;

    /**
     * @param AdsRepositoryInterface $adsRepository
     */
    public function __construct(AdsRepositoryInterface $adsRepository)
    {
        $this->adsRepository = $adsRepository;
    }

    public function index(){
        return $this->success('All Ads',[
            'items'=> new EloquentResource($this->adsRepository->getAllItems())
        ]);
    }

    public function myAds(){
        return $this->success('My Ads',[
            'items'=> new EloquentResource($this->adsRepository->myAds())
        ]);
    }

    public function show(Ads $ads)
    {
        return $this->success('Ads Info',[
            'ads'=> $ads->formatResponse(true)
        ]);
    }

    public function store(AdsRequest $request){
        $ads = $this->adsRepository->store($request);
        return $ads?$this->success('Ads Created Successfully'):$this->error('Ads create failed');
    }


}
