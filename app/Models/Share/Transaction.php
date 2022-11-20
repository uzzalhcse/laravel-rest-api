<?php

namespace App\Models\Share;

use App\Models\Auth\User;
use App\Models\Package\UserPackage;
use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    use HasFactory, Utils, \App\Traits\Status;

    public function scopePurchase($query){
        return $query->whereIn('type',['Advertisement','Billboard']);
    }

    public function scopeByOwner($query){
        return $query->where('user_id',Auth::guard('api')->id());
    }
    public function user(){
        return $this->belongsTo(User::class);
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
            'package_name'=>$this->package->package->name,
            'package_is_active'=>$this->package->is_active,
            'payment_type'=>$this->payment_type,
            'status'=>$this->status->title,
        ];
    }
}
