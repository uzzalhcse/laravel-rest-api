<?php

namespace App\Models\Ads;

use App\Models\Auth\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditionHistory extends Model
{
    use HasFactory;

    public function ads(){
        return $this->belongsTo(Ads::class);
    }

    public function provider(){
        return $this->belongsTo(User::class,'provider_id');
    }

    public function advertiser(){
        return $this->belongsTo(User::class,'advertiser_id');
    }

    public function publisher(){
        return $this->belongsTo(User::class,'user_id');
    }
}
