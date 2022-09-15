<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\ApiController;
use App\Http\Resources\EloquentResource;
use App\Interfaces\AdsRepositoryInterface;

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


}
