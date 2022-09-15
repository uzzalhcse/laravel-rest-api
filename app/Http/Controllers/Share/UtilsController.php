<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Resources\EloquentResource;
use App\Http\Resources\Share\StatusResource;
use App\Interfaces\AdsRepositoryInterface;
use App\Interfaces\Blog\BlogRepositoryInterface;
use App\Models\Ads\Ads;
use App\Models\Share\Country;
use App\Models\Share\District;
use App\Models\Share\Division;
use App\Models\Share\Faq;
use App\Models\Share\Status;
use App\Models\Share\Upazila;
use App\Repositories\BillBoardRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UtilsController extends ApiController
{
    protected BlogRepositoryInterface $blogRepository;
    protected AdsRepositoryInterface $adsRepository;
    protected BillBoardRepository $billBoardRepository;

    /**
     * @param BlogRepositoryInterface $blogRepository
     */
    public function __construct(BlogRepositoryInterface $blogRepository,AdsRepositoryInterface $adsRepository,BillBoardRepository $billBoardRepository)
    {
        $this->blogRepository = $blogRepository;
        $this->adsRepository = $adsRepository;
        $this->billBoardRepository = $billBoardRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function statuses(): JsonResponse
    {
        return $this->success('All status list',[
            'statuses'=>StatusResource::collection(Status::all())
        ]);
    }
    public function countries(): JsonResponse
    {
        return $this->success('All country list',[
            'countries'=>Country::all()
        ]);
    }

    public function homepage(){
        return $this->success('Homepage',[
            'promotional_video'=> [
                'src'=>url('/utils/promo-video.mp4'),
                'type'=>'video/mp4'
            ],
            'countdown'=> [
                'countries'=>'250',
                'users'=>'2Bln',
                'providers'=>'250',
                'daily_paid'=>'100k',
            ],
            'ads'=>new EloquentResource($this->adsRepository->getAllItems()),
            'billboards'=>new EloquentResource($this->billBoardRepository->getAllItems()),
            'faqs'=>new EloquentResource(Faq::all()),
            'blogs'=> new EloquentResource($this->blogRepository->getAllItems())
        ]);
    }

    public function faq(){
        return $this->success('Faq List',[
            'items'=>Faq::all()
        ]);
    }
}
