<?php

namespace App\Models\Ads;

use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsSubscription extends Model
{
    use HasFactory, Utils;


    public function formatResponse($is_detail = false): array
    {
        $res = [
            'id'=>$this->id,
        ];
        $details = [

        ];
        return $is_detail ? array_merge($res,$details) : $res;
    }
}
