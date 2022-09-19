<?php

namespace App\Http\Controllers;

use App\Http\Resources\Auth\AuthResource;
use App\Http\Resources\TestCollection;
use App\Http\Resources\TestResource;
use App\Jobs\WelcomeEmailJob;
use App\Mail\WelcomeEmail;
use App\Models\Ads\Ads;
use App\Models\Auth\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Exception;
use Twilio\Rest\Client;

class TestController extends ApiController
{
    public function test(){
        return [in_array('super_admin',User::find(1)->roles->pluck('slug')->toArray())];
    }

    public function testEmail(){
        $users = User::all()->take(150);
        foreach ($users as $user){
            dispatch(new WelcomeEmailJob($user));
        }
//        Mail::to($users->first()->email)->send(new WelcomeEmail($users->first()));
        return $this->success('Mail sent to '.$users->count().' number of users');
    }
    public function twilioSms()
    {
        $time = Carbon::now()->toDateTimeString();
        $receiverNumber = "+8801860865698";
        $message = "This is testing from Backend $time";

        try {

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_TOKEN");
            $twilio_number = getenv("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);
            $res = $client->messages->create($receiverNumber, [
                'from' => $twilio_number,
                'body' => $message]);

            return $this->success('SMS Sent Successfully',[$res,$time]);

        } catch (Exception $e) {
            return $this->error('Error',[$e->getMessage()]);
        }
    }
}
