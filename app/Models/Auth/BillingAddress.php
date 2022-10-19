<?php

namespace App\Models\Auth;

use App\Models\Share\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingAddress extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function formatResponse(){
        return [
            'id'=>$this->id,
            'country_id'=>$this->country_id,
            'first_name'=>$this->first_name,
            'country_code'=>$this->country?->code,
            'last_name'=>$this->last_name,
            'company_name'=>$this->company_name,
            'email'=>$this->email,
            'address'=>$this->address,
            'city'=>$this->city,
            'zipcode'=>$this->zipcode,
        ];
    }
}
