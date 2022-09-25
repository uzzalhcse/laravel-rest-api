<?php

namespace App\Models\Package;

use App\Models\Auth\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserPackage extends Model
{
    use HasFactory;

    protected $appends = ['is_active'];

    public function package(){
        return $this->belongsTo(Package::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getIsActiveAttribute(){
        return Carbon::parse($this->expired_at)->isFuture();
    }
}
