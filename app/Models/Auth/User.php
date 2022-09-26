<?php

namespace App\Models\Auth;

use App\Models\Acl\Module;
use App\Models\Acl\Permission;
use App\Models\Ads\Ads;
use App\Models\Package\UserPackage;
use App\Traits\ScopeActive;
use App\Traits\Status;
use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory,SoftDeletes, Notifiable, ScopeActive,Status,Utils, LogsActivity;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'role'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'name'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_roles');
    }

    public function getIsActiveAttribute(){
        if ($this->status->code == 1){
            return true;
        }
        return false;
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class,'user_permissions');
    }
    public function billing_address(){
        return $this->hasOne(BillingAddress::class)->withDefault([
            'country_id'=>null
        ]);
    }

    public function getAclAttribute(){
        return $this->roles->map->permissions->flatten()->merge($this->permissions)->pluck('slug');
    }
    public function getAvatarAttribute(){
        return url('/').$this->attributes['avatar'];
    }

    public function getNameAttribute(){
        return $this->first_name.' '.$this->last_name;
    }

    public function formatResponse(){
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'avatar'=>$this->avatar,
            'email'=>$this->email,
            'mobile'=>$this->email,
            'address'=>$this->address,
            'role_ids'=>$this->roles->pluck('id'),
            'roles'=>$this->roles,
            'is_active'=>$this->is_active,
            'date'=>$this->date,
            'status'=>$this->status->title,
            'status_id'=>$this->status_id,
        ];
    }

    public function ads_subscriptions(){
        return $this->belongsToMany(Ads::class,'ads_subscriptions');
    }
    public function billboard_package(){
        return $this->hasOne(UserPackage::class)->whereHas('package',function ($q){
            return $q->where('type','Billboard');
        });
    }
    public function advertisement_package(){
        return $this->hasOne(UserPackage::class)->whereHas('package',function ($q){
            return $q->where('type','Advertisement');
        });
    }

    /**
     * @return LogOptions
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('User')
            ->logOnly(['first_name', 'last_name', 'email', 'status_id'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "This User {$this->name} has been {$eventName}");
    }
}
