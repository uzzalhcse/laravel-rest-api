<?php

namespace App\Models\Share;

use App\Models\Package\UserPackage;
use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    use HasFactory, Utils, \App\Traits\Status;

    public function scopePurchase($query){
        return $query->whereIn('type',['Package Purchase','Billboard']);
    }

    public function scopeByOwner($query){
        return $query->where('user_id',Auth::id());
    }

    public function receipt()
    {
        return $this->morphOne(Media::class, 'mediable');
    }

    public function package(){
        return $this->hasOne(UserPackage::class);
    }

    public function formatResponse(){
        return [
            'id'=>$this->id,
            'trxid'=>$this->trxid,
            'date'=>$this->date,
            'total'=>$this->total,
            'receipt'=>$this->receipt ? url($this->receipt->path): null,
            'receipt_file'=>null,
            'payment_method'=>$this->payment_method,
            'status'=>$this->status->title,
        ];
    }
}
