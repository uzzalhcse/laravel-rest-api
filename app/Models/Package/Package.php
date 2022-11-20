<?php

namespace App\Models\Package;

use App\Models\Auth\User;
use App\Traits\ScopeActive;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Package extends Model
{
    use HasFactory;
    protected $appends = ['is_purchased','status'];

    public function scopeEnabled($query){
        return $query->where('is_enabled',1);
    }
    public function getIsPurchasedAttribute(){
        return $this->users->where('id',Auth::guard('api')->id())->count() > 0;
    }
    public function users(){
        return $this->belongsToMany(User::class,'user_packages');
    }

    public function user_package(){
        return $this->hasOne(UserPackage::class)->where('user_id',Auth::guard('api')->id());
    }

    public function getStatusAttribute(){
        return $this->user_package ? $this->user_package->status->title : null;
    }


    public function formatResponse(): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'min_price'=>$this->min_price,
            'max_price'=>$this->max_price,
            'cpa'=>$this->cpa,
            'no_of_network_provider_limit'=>$this->no_of_network_provider_limit,
            'type'=>$this->type,
            'is_popular'=>$this->is_popular,
            'is_purchased'=>$this->is_purchased,
            'status'=>$this->status,
            'is_enabled'=>$this->is_enabled,
            'user_package'=>$this->user_package,
        ];
    }
}
