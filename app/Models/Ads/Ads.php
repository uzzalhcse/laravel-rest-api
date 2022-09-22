<?php

namespace App\Models\Ads;

use App\Models\Auth\User;
use App\Models\Share\Country;
use App\Models\Share\Media;
use App\Traits\ScopeActive;
use App\Traits\Status;
use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Ads extends Model
{
    use HasFactory,SoftDeletes,ScopeActive,Status,Utils,LogsActivity;
    protected $casts = [
        'male_age_range'=>'array',
        'female_age_range'=>'array',


    ];

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }
    public function scopeByOwner($query){
        return $query->where('user_id',Auth::id());
    }

    public function getThumbnailAttribute(){
        return $this->media->where('media_type','thumbnail')->first()->path;
    }

    public function getBannerAttribute(){
        return $this->media->where('media_type','banner')->first()->path;
    }
    public function getAudioAttribute(){
        return $this->media->where('media_type','audio')->first()->path;
    }
    public function owner(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function countries(){
        return $this->belongsToMany(Country::class,'ads_countries');
    }

    public function providers(){
        return $this->belongsToMany(User::class,'ads_providers','ads_id','user_id');
    }
    public function subscribers(){
        return $this->belongsToMany(User::class,'ads_subscriptions')->withTimestamps();
    }

    public function getCountryIdsAttribute(){
        return $this->countries->pluck('id');
    }

    public function getProviderIdsAttribute(){
        return $this->providers->pluck('id');
    }

    public function formatResponse($is_detail = false): array
    {
        $res = [
            'id'=>$this->id,
            'title'=>$this->title,
            'owner'=>$this->owner,
            'year'=>$this->year,
            'thumbnail'=>url('/').$this->thumbnail,
            'aired'=>$this->date,
            'description'=>$this->description,
            'audio'=>url('/').$this->audio,
            'banner'=>url('/').$this->banner,
            'rating'=> 4.2,
            'status_id'=> $this->status_id,
            'status'=>$this->status->title
        ];
        $details = [
            'male_age_range'=>$this->male_age_range,
            'female_age_range'=>$this->female_age_range,
            'preferred_gender'=>$this->preferred_gender,
            'country_ids'=>$this->country_ids,
            'provider_ids'=>$this->provider_ids,

        ];
        return $is_detail ? array_merge($res,$details) : $res;
    }

    /**
     * @return LogOptions
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Ads')
            ->logOnly(['title', 'status_id'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "This Ads {$this->name} has been {$eventName}");
    }
}
