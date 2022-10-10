<?php

namespace App\Models\Ads;

use App\Models\Auth\User;
use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsSubscription extends Model
{
    use HasFactory, Utils;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function ads(){
        return $this->belongsTo(Ads::class);
    }


    public function formatResponse($is_detail = false): array
    {
        $res = [
            'id'=>$this->id,
            'user'=>$this->user->formatResponse(),
            'ads'=>$this->ads->formatResponse(),
        ];
        $details = [

        ];
        return $is_detail ? array_merge($res,$details) : $res;
    }
}
