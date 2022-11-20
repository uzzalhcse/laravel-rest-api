<?php

namespace App\Models\Auth;

use App\Models\Acl\Module;
use App\Models\Acl\Permission;
use App\Models\Ads\Ads;
use App\Models\Ads\AdsReview;
use App\Models\Ads\Audition;
use App\Models\Ads\AuditionHistory;
use App\Models\Ads\Billboard;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Package\UserPackage;
use App\Models\PayoutHistory;
use App\Models\Share\Country;
use App\Traits\ScopeActive;
use App\Traits\Status;
use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
//use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory,SoftDeletes, Notifiable, ScopeActive,Status,Utils, LogsActivity, Billable;
    const CUSTOMER_CARE_USER_ID = 6;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile',
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
            'country_id'=>null,
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
            'mobile'=>$this->mobile,
            'type'=>$this->type,
            'address'=>$this->address,
            'role_ids'=>$this->roles->pluck('id'),
            'roles'=>$this->roles,
            'is_active'=>$this->is_active,
            'date'=>$this->date,
            'status'=>$this->status->title,
            'status_id'=>$this->status_id,
        ];
    }

    public function getInfo(){
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'avatar'=>$this->avatar,
            'email'=>$this->email,
            'mobile'=>$this->mobile,
            'gender'=>$this->gender,
            'country'=>$this->country->name,
            'type'=>$this->type,
            'address'=>$this->address,
            'phone_model'=>$this->profile?->phone_model,
            'is_active'=>$this->is_active,
            'date'=>$this->date,
            'status'=>$this->status->title,
        ];
    }
    public function profile(){
        return $this->hasOne(UserProfile::class);
    }

    public function ads(){
        return $this->hasMany(Ads::class);
    }

    public function billboards(){
        return $this->hasMany(Billboard::class);
    }

    public function ads_audition(){
        return $this->hasMany(Audition::class,'advertiser_id');
    }

    public function ads_subscriptions(){
        return $this->belongsToMany(Ads::class,'ads_subscriptions');
    }
    public function ads_reviews(){
        return $this->hasMany(AdsReview::class);
    }
    public function billboard_package(){
        return $this->hasOne(UserPackage::class)->whereHas('package',function ($q){
            return $q->where('type','Billboard');
        })->where('status_id',\App\Models\Share\Status::Active);
    }
    public function advertisement_package(){
        return $this->hasOne(UserPackage::class)->whereHas('package',function ($q){
            return $q->where('type','Advertisement');
        })->where('status_id',\App\Models\Share\Status::Active);
    }

    public function getAvailableBalanceAttribute(){
        $total =  $this->audition_histories->where('is_pending',0)->sum('amount') - $this->payout_histories->sum('amount');
        return max($total, 0);
    }

    public function audition_histories(){
        return $this->hasMany(AuditionHistory::class);
    }

    public function payout_histories(){
        return $this->hasMany(PayoutHistory::class);
    }


    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function send_messages(){
        return $this->hasMany(Message::class,'sender_id')->latest();
    }

    public function receive_messages(){
        return $this->hasMany(Message::class,'receiver_id')->latest();
    }
    public function last_msg(){
        return $this->send_messages->merge($this->receive_messages)->last();
    }

    public function my_notifications()
    {
        return $this->hasMany(Notification::class,'notifiable_id');
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
