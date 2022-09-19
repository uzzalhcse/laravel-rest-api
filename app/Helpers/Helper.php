<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

if (! function_exists('is_user')) {
    function is_user(): bool
    {
        return Auth::check() && in_array('user',Auth::user()->roles->pluck('slug')->toArray());
    }
}


if (! function_exists('upload_file')) {
    function upload_file(Request $request,$key,$path = '/'): ?string
    {
        $filename_path = null;
        if ($request->hasFile($key)) {
            $destinationPath = '/uploads'.$path.Carbon::now()->month.'/';
            $file = $request->file($key);
            $filename = time().'_'.Str::of($file->getClientOriginalName())->lower()->kebab();
            $file->move(public_path() . $destinationPath, $filename);
            $filename_path = $destinationPath . $filename;
        }
        return $filename_path;
    }
}

