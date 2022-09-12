<?php

namespace App\Http\Controllers;

use App\Http\Resources\Auth\AuthResource;
use App\Http\Resources\Auth\UserResource;
use App\Http\Resources\TestCollection;
use App\Http\Resources\TestResource;
use App\Jobs\WelcomeEmailJob;
use App\Mail\WelcomeEmail;
use App\Models\Auth\User;
use App\Models\Share\District;
use App\Models\Share\Upazila;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class TestController extends ApiController
{
    public function test(){
        return [Carbon::now()->month];
    }

    public function testEmail(){
        $users = User::all()->take(150);
        foreach ($users as $user){
            dispatch(new WelcomeEmailJob($user));
        }
//        Mail::to($users->first()->email)->send(new WelcomeEmail($users->first()));
        return $this->success('Mail sent to '.$users->count().' number of users');
    }
}
