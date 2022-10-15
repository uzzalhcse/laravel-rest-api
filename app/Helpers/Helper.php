<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Twilio\Rest\Client;

if (! function_exists('is_admin')) {
    function is_admin(): bool
    {
        return Auth::check() && in_array('super_admin',Auth::user()->roles->pluck('slug')->toArray());
    }
}

if (! function_exists('is_advertiser')) {
    function is_advertiser(): bool
    {
        return Auth::check() && in_array('advertiser',Auth::user()->roles->pluck('slug')->toArray());
    }
}


if (! function_exists('is_provider')) {
    function is_provider(): bool
    {
        return Auth::guard('sanctum')->check() && in_array('provider',Auth::guard('sanctum')->user()->roles->pluck('slug')->toArray());
    }
}

if (! function_exists('is_user')) {
    function is_user(): bool
    {
        return Auth::check() && in_array('user',Auth::user()->roles->pluck('slug')->toArray());
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
            $file->move(public_path() . $destinationPath, $filename);
            $filename_path = $destinationPath . $filename;
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


if (! function_exists('send_sms')) {
    function send_sms($to,$msg): bool
    {
        try {

            $account_sid = env("TWILIO_SID");
            $auth_token = env("TWILIO_TOKEN");
            $twilio_number = env("TWILIO_FROM");

            $client = new Client($account_sid, $auth_token);
            $res = $client->messages->create($to, [
                'from' => $twilio_number,
                'body' => $msg]);

            return true;

        } catch (Exception $e) {
            \Illuminate\Support\Facades\Log::info('SMS_'.$e);
            return false;
        }
    }
}

if (! function_exists('num_format')) {
    function num_format($number,$decimals = 3, $decimal_separator = '.', $thousands_separator = ''): float
    {
       return number_format($number, $decimals, $decimal_separator, $thousands_separator);
    }
}

