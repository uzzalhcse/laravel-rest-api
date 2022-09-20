<?php

namespace App\Traits;

use Carbon\Carbon;

trait Utils
{

    public function getDateAttribute(): string
    {
        return Carbon::parse($this->created_at)->format('Y-m-d');
    }

    public function getYearAttribute(): string
    {
        return Carbon::parse($this->created_at)->format('Y');
    }

}
