<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends ApiController
{
    public function index()
    {
        return view('frontend.index');
    }

    public function maintenanceMode($key)
    {
        if ($key !=  1292){
            return $this->error("Don't be so smart");
        }
        Artisan::call('down --secret="88889999"  --render="maintenance"');
        return redirect()->route('home');
    }
    public function disableMaintenanceMode($key)
    {
        if ($key !=  1292){
            return $this->error("Don't be so smart");
        }
        Artisan::call('up');
        return redirect()->route('home');
    }

    public function about(){
        return view('frontend.aboutus');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function pricing(){
        return view('frontend.pricing');
    }
}
