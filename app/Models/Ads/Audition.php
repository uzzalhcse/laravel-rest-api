<?php

namespace App\Models\Ads;

use App\Models\Auth\User;
use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Audition extends Model
{
    use HasFactory, Utils;

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
    public function history(){
        return $this->hasMany(AuditionHistory::class);
    }

    public function formatResponse(){
        return [
            'id'=>$this->id,
            'provider'=>$this->provider->name,
            'mobile'=>Str::mask($this->mobile,'*',-7,4),
            'cpa'=>$this->cpa,
            'date'=>$this->date,
        ];
    }
}
