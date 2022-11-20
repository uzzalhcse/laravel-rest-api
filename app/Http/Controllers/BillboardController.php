<?php

namespace App\Http\Controllers;

use App\Http\Requests\BillboardRequest;
use App\Http\Resources\EloquentResource;
use App\Interfaces\BillBoardRepositoryInterface;
use App\Models\Ads\Billboard;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

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


    public function index(): JsonResponse
    {
        return $this->success('My Billboard',[
            'items'=> new EloquentResource(is_admin() ? $this->billBoardRepository->getAllItems() : $this->billBoardRepository->getActiveItems())
        ]);
    }

    public function myBillBoard(): JsonResponse
    {
        return $this->success('My Billboard',[
            'items'=> new EloquentResource($this->billBoardRepository->getMyItems())
        ]);
    }

    public function show(Billboard $billboard): JsonResponse
    {
        return $this->success('Bill board info',[
            'item'=> $billboard->formatResponse()
        ]);
    }

    public function store(BillboardRequest $request): JsonResponse
    {
        if (!isset(Auth::guard('api')->user()->billboard_package) || !Auth::guard('api')->user()->billboard_package->is_active){
            return $this->error("You Don't have any Active Package");
        }
        $res = $this->billBoardRepository->store($request);
        return $res? $this->success('Billboard created successfully') : $this->error('Billboard Create Failed');
    }

    public function update(BillboardRequest $request, Billboard $billboard): JsonResponse
    {
        $res = $this->billBoardRepository->update($request, $billboard);
        return $res? $this->success('Billboard updated successfully') : $this->error('Billboard update Failed');
    }

    public function updateStatus(Billboard $billboard,$status): JsonResponse
    {
        $res = $this->billBoardRepository->updateStatus($billboard, $status);
        return $res? $this->success('Billboard updated successfully') : $this->error('Billboard update Failed');
    }

    public function destroy(Billboard $billboard): JsonResponse
    {
        $res = $this->billBoardRepository->delete($billboard);
        return $res? $this->success('Billboard deleted successfully') : $this->error('Billboard delete Failed');
    }
}
