<?php

use App\Events\NotificationEvent;
use App\Models\Auth\User;
use App\Notifications\GeneralNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Twilio\Rest\Client;

if (! function_exists('is_admin')) {
    function is_admin(): bool
    {
        return Auth::check() && in_array('super_admin',Auth::guard('api')->user()->roles->pluck('slug')->toArray());
    }
}

if (! function_exists('is_advertiser')) {
    function is_advertiser(): bool
    {
        return Auth::check() && in_array('advertiser',Auth::guard('api')->user()->roles->pluck('slug')->toArray());
    }
}


if (! function_exists('is_provider')) {
    function is_provider(): bool
    {
        return Auth::guard('api')->check() && in_array('provider',Auth::guard('api')->user()->roles->pluck('slug')->toArray());
    }
}

if (! function_exists('is_user')) {
    function is_user(): bool
    {
        return Auth::check() && in_array('user',Auth::guard('api')->user()->roles->pluck('slug')->toArray());
    }
}


if (! function_exists('upload_file')) {
    function upload_file(Request $request,$key,$path = '/',$file_title = null): ?string
    {
        $filename_path = null;
        if ($request->hasFile($key)) {
            $destinationPath = '/uploads'.$path.Carbon::now()->month.'/';
            $file = $request->file($key);
            if ($file_title){
                $filename = time().'_'.Str::of($file_title)->lower()->kebab().'.'.$file->getClientOriginalExtension();
            } else{

                $filename = time().'_'.Str::of($file->getClientOriginalName())->lower()->kebab();
            }
            $filename_path = $destinationPath . $filename;
            $file->move(public_path() . $destinationPath, $filename);
        }
        return $filename_path;
    }
}

if (! function_exists('get_percentage')) {
    function get_percentage($number,$percentage)
    {
        return ($percentage / 100) * $number;
    }
}


if (! function_exists('paginate_if_required')) {
    function paginate_if_required($items)
    {
        if (isset(request()->page)){ // paginate if request has page query
            $items = $items->paginate(config('settings.pagination.per_page'));
        } else{
            $items = $items->take(20)->get();
        }
        return $items;
    }
}


//if (! function_exists('send_sms')) {
//    function send_sms($to,$msg)
//    {
//        $response = Http::get('https://api.sms.net.bd/sendsms', [
//            'api_key' => '40G7C80aHilL847LsmRDuewhM279qwetCvgydNpg',
//            'msg' => $msg,
//            'to' => $to,
//        ]);
//
//        return !($response['error'] != 0);
//    }
//}

if (! function_exists('send_sms')) {
    function send_sms($to,$msg)
    {
        return send_sms_infobip($to,$msg);
    }
}
if (! function_exists('send_sms_infobip')) {
    function send_sms_infobip($to,$msg)
    {
        $key = 'a64250e756e0d95a5f0d2c1fea07fa3b-014661dc-7aff-456b-9962-0564d01bc3c9';
        $response = Http::withHeaders([
            'Authorization' => "App a64250e756e0d95a5f0d2c1fea07fa3b-014661dc-7aff-456b-9962-0564d01bc3c9",
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ])->post('https://nzgz5y.api.infobip.com/sms/2/text/advanced', [
            'messages' => [
                [
                    'from' => 'ATC',
                    'destinations' => [
                        ['to' => $to]
                    ],
                    'text' => $msg,
                ]
            ]
        ]);

        return true;
    }
}

//if (! function_exists('send_sms')) {
//    function send_sms($to,$msg): bool
//    {
//        $basic  = new \Vonage\Client\Credentials\Basic(env('VONAGE_KEY', 'a9e4c146'), env('VONAGE_SECRET', 'UWb9yYV2UbBpghax'));
//        $client = new \Vonage\Client($basic);
//
//
//        try {
//            $response = $client->sms()->send(
//                new \Vonage\SMS\Message\SMS($to, 'ATC', $msg)
//            );
//
//            $message = $response->current();
//
//            if ($message->getStatus() == 0) {
//                return true;
//            } else {
//                \Illuminate\Support\Facades\Log::info("The message failed with status: " . $message->getStatus() . "\n");
//                return false;
//            }
//        } catch (Exception $exception){
//            \Illuminate\Support\Facades\Log::info("The message failed with status: " . $exception->getMessage() . "\n");
//            return false;
//        }
//    }
//}

if (! function_exists('num_format')) {
    function num_format($number,$decimals = 3, $decimal_separator = '.', $thousands_separator = ''): float
    {
       return number_format($number, $decimals, $decimal_separator, $thousands_separator);
    }
}



if (! function_exists('send_notification')) {
    function send_notification($userIds, $title, $body)
    {
        $users = User::whereIn('id',$userIds)->get();
        $firebaseToken = $users->pluck('device_token');

        $SERVER_API_KEY = env('FCM_SERVER_KEY');

        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                'type'=>'general',
                "title" => $title,
                "body" => $body,
            ]
        ];
        foreach ($users as $user){
            $user->notify(new GeneralNotification($data['notification']));
            $user->fresh();
            broadcast(new NotificationEvent($user->id, $user->my_notifications->sortBy('created_at')->last()->formatResponse()));
        }
        $dataString = json_encode($data);

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

        $response = curl_exec($ch);
        return json_decode($response);
    }
}

