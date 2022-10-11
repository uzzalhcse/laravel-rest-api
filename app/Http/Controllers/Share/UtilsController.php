<?php

namespace App\Http\Controllers\Share;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Resources\ActivityLogResource;
use App\Http\Resources\EloquentResource;
use App\Http\Resources\ProviderResource;
use App\Http\Resources\Share\StatusResource;
use App\Interfaces\AdsRepositoryInterface;
use App\Interfaces\Blog\BlogRepositoryInterface;
use App\Models\Ads\Ads;
use App\Models\Ads\AuditionEarning;
use App\Models\Ads\AuditionHistory;
use App\Models\Auth\User;
use App\Models\Package\Package;
use App\Models\Share\Country;
use App\Models\Share\District;
use App\Models\Share\Division;
use App\Models\Share\Faq;
use App\Models\Share\Status;
use App\Models\Share\Upazila;
use App\Repositories\BillBoardRepository;
use App\Services\OTPService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Activitylog\Models\Activity;

class UtilsController extends ApiController
{
    protected BlogRepositoryInterface $blogRepository;
    protected AdsRepositoryInterface $adsRepository;
    protected BillBoardRepository $billBoardRepository;
    protected OTPService $OTPService;

    /**
     * @param BlogRepositoryInterface $blogRepository
     */
    public function __construct(BlogRepositoryInterface $blogRepository,AdsRepositoryInterface $adsRepository,BillBoardRepository $billBoardRepository,OTPService $OTPService)
    {
        $this->blogRepository = $blogRepository;
        $this->adsRepository = $adsRepository;
        $this->billBoardRepository = $billBoardRepository;
        $this->OTPService = $OTPService;
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
    public function billboards(){
        return $this->success('Billboard List',[
            'billboards'=>new EloquentResource($this->billBoardRepository->getActiveItems()),
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
            'ads'=>new EloquentResource($this->adsRepository->popularItems()),
            'billboards'=>new EloquentResource($this->billBoardRepository->getActiveItems()),
            'faqs'=>new EloquentResource(Faq::all()),
            'blogs'=> new EloquentResource($this->blogRepository->getActiveItems())
        ]);
    }

    public function faq(){
        return $this->success('Faq List',[
            'items'=>Faq::all()
        ]);
    }

    public function packages(){
        $packages = Package::enabled();
        if(is_provider()){
            $packages = $packages->where('type','Billboard');
        }
        return $this->success('All Package List',[
            'items'=>$packages->get()
        ]);
    }

    public function serviceProviders(){
        $users = User::with('roles')->whereHas('roles',function ($query){
            return $query->where('slug','provider');
        })->get();
        return $this->success('Service Providers',[
            'providers'=>ProviderResource::collection($users)
        ]);
    }


    public function activityLogs(){
        return $this->success('Activity Logs',[
            'items'=> new ActivityLogResource(Activity::latest()->paginate(config('settings.pagination.per_page')))
        ]);
    }


    public function sendOtp(Request $request){
        return $this->OTPService->sendOTP($request);
    }





























    public function clear(){
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        return $this->success('Application Cache Cleared!');
    }
}
