<?php

namespace App\Models\Share;

use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    use HasFactory, Utils, \App\Traits\Status;

    public function scopePurchase($query){
        return $query->where('type','Package Purchase');
    }

    public function scopeByOwner($query){
        return $query->where('user_id',Auth::id());
    }

    public function formatResponse(){
        return [
            'id'=>$this->id,
            'trxid'=>$this->trxid,
            'date'=>$this->date,
            'total'=>$this->total,
            'payment_method'=>$this->payment_method,
            'status'=>$this->status->title,
        ];
    }
}
