<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdsRequest;
use App\Http\Resources\EloquentResource;
use App\Interfaces\AdsRepositoryInterface;
use App\Models\Ads\Ads;

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
            'items'=> new EloquentResource(is_admin() ?$this->adsRepository->getAllItems() : $this->adsRepository->getActiveItems())
        ]);
    }

    public function myAds(){
        return $this->success('My Ads',[
            'items'=> new EloquentResource($this->adsRepository->getMyItems())
        ]);
    }

    public function show(Ads $ads)
    {
        return $this->success('Ads Info',[
            'item'=> $ads->formatResponse(true)
        ]);
    }

    public function store(AdsRequest $request){
        $ads = $this->adsRepository->store($request);
        return $ads?$this->success('Ads Created Successfully'):$this->error('Ads create failed');
    }

    public function update(AdsRequest $request, Ads $ads){
        $ads = $this->adsRepository->update($request, $ads);
        return $ads?$this->success('Ads Update Successfully'):$this->error('Ads create failed');
    }
    public function updateStatus(Ads $ads, $status){

        $res = $this->adsRepository->updateStatus($ads,$status);
        return $res ? $this->success('Ads Status Updated') : $this->error('Ads Update failed');

    }

    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $ads = Ads::findOrFail($id);
        $this->adsRepository->delete($ads);
        return $this->success('Ads has been deleted');
    }


}