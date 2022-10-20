<?php

namespace App\Models;

use App\Models\Auth\User;
use App\Traits\Status;
use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayoutHistory extends Model
{
    use HasFactory, Utils, Status;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function formatResponse(){
        return [
            'id'=>$this->id,
            'user'=>$this->user->name,
            'user_id'=>$this->user_id,
            'amount'=>$this->amount,
            'payment_method'=>$this->payment_method,
            'paypal_email'=>$this->paypal_email,
            'bank_account_name'=>$this->bank_account_name,
            'bank_account_number'=>$this->bank_account_number,
            'bank_swift_code'=>$this->bank_swift_code,
            'bank_name'=>$this->bank_name,
            'bank_iban'=>$this->bank_iban,
            'status'=>$this->status_title,
            'date'=>$this->date,
        ];
    }
}
