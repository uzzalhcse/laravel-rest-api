<?php

namespace App\Models\Ads;

use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditionEarning extends Model
{
    use HasFactory, Utils;

    public function audition(){
        return $this->belongsTo(AuditionHistory::class,'audition_history_id');
    }

    public function formatResponse(){
        return [
            'id'=>$this->id,
            'amount'=>$this->amount,
            'ads'=>$this->audition->ads->title,
            'provider'=>$this->audition->provider->name,
            'mobile'=>$this->audition->mobile,
            'is_pending'=>$this->is_pending,
            'date'=>$this->date,
        ];
    }
}
