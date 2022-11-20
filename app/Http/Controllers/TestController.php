<?php

namespace App\Http\Controllers;

use App\Http\Resources\ActivityLogResource;
use App\Http\Resources\Auth\AuthResource;
use App\Http\Resources\EloquentResource;
use App\Http\Resources\TestCollection;
use App\Http\Resources\TestResource;
use App\Jobs\WelcomeEmailJob;
use App\Mail\WelcomeEmail;
use App\Models\Ads\Ads;
use App\Models\Auth\User;
use App\Models\Share\Media;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use Exception;
use Illuminate\Support\Str;
use Spatie\Activitylog\Models\Activity;
use Twilio\Rest\Client;
use Vonage\Laravel\Facade\Vonage;

class TestController extends ApiController
{
    public function test(){
        return $this->sendNotification();
    }
    public function sendNotification(){
        $user = User::find(3);
//        $user = Auth::guard('api')->user();
        $res = send_notification([$user->id],'Test Notification'.Str::random(6),"This is test notification");
//        $res = $user->my_notifications->sortBy('created_at')->last()->formatResponse();
        return [$res];
    }
    public function getMediaFiles(){
        $type = 'banner';
        $media = Media::with('mediable')
            ->whereHas('mediable', function ($q){
            $q->where('user_id',3);
        })
            ->latest('updated_at')->get();
        return $this->success('',[
            'items'=>$media
        ]);
    }
    public function mySubscriptions(){
        $user = User::find(5);
        return $this->success('Subscriptions',[
            'items'=>new EloquentResource($user->ads_subscriptions)
        ]);
    }

    public function testEmail(){
        $users = User::all()->take(6);
        foreach ($users as $user){
            dispatch(new WelcomeEmailJob($user));
        }
//        Mail::to($users->first()->email)->send(new WelcomeEmail($users->first()));
        return $this->success('Mail sent to '.$users->count().' number of users');
    }
    public function smsBd(){
        $toNumber = '+8801860865698';
        $res = send_sms($toNumber,'This is test msg from atc');
        return [$res];
//        return $res ? $this->success('Sms send successfully') : $this->error('Sms send failed');
    }
    public function nextmoSms(){
        $toNumber = '+8801860865698';
        $res = send_sms($toNumber,'This is test msg from atc');
        return $res ? $this->success('Sms send successfully') : $this->error('Sms send failed');
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
