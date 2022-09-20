<?php

namespace App\Http\Controllers;

use App\Http\Resources\EloquentResource;
use App\Interfaces\BillBoardRepositoryInterface;
use App\Models\Ads\Billboard;

class BillboardController extends ApiController
{
    protected BillBoardRepositoryInterface $billBoardRepository;

    /**
     * @param BillBoardRepositoryInterface $billBoardRepository
     */
    public function __construct(BillBoardRepositoryInterface $billBoardRepository)
    {
        $this->billBoardRepository = $billBoardRepository;
    }


    public function index(){
        return $this->success('My Billboard',[
            'items'=> new EloquentResource(is_admin() ? $this->billBoardRepository->getAllItems() : $this->billBoardRepository->getActiveItems())
        ]);
    }

    public function myBillBoard(){
        return $this->success('My Billboard',[
            'items'=> new EloquentResource($this->billBoardRepository->getMyItems())
        ]);
    }

    public function show(Billboard $billboard){
        return $this->success('Bill board info',[
            'item'=> $billboard->formatResponse()
        ]);
    }
}
