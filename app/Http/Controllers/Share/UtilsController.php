<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Resources\Share\StatusResource;
use App\Models\Share\Country;
use App\Models\Share\District;
use App\Models\Share\Division;
use App\Models\Share\Status;
use App\Models\Share\Upazila;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UtilsController extends ApiController
{
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
            'home_page'=>[
                'promotional_video'=> url('/utils/promo-video.mp4'),
                'countdown'=> [
                    'countries'=>'250',
                    'users'=>'2Bln',
                    'providers'=>'250',
                    'daily_paid'=>'100k',
                ],
                'most_popular_ads'=>[]
            ]
        ]);
    }
}
