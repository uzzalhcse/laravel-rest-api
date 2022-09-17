<?php

use Illuminate\Support\Facades\Auth;

if (! function_exists('is_admin')) {
    function is_admin(): bool
    {
        return Auth::check() && in_array('super_admin',Auth::user()->roles->toArray());
    }
}

if (! function_exists('is_advertiser')) {
    function is_advertiser(): bool
    {
        return Auth::check() && in_array('advertiser',Auth::user()->roles->toArray());
    }
}

if (! function_exists('is_user')) {
    function is_user(): bool
    {
        return Auth::check() && in_array('user',Auth::user()->roles->toArray());
    }
}
