<?php

namespace App\Models\Ads;

use App\Models\Auth\User;
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

class Billboard extends Model
{
    use HasFactory,SoftDeletes,ScopeActive,Status, Utils, LogsActivity;

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function owner(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function getThumbnailAttribute(){
        return $this->media->where('media_type','thumbnail')->first()->path;
    }

    public function scopeByOwner($query){
        return $query->where('user_id',Auth::guard('api')->id());
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function formatResponse($is_detail =  false): array
    {
        $items = [
            'id'=>$this->id,
            'title'=>$this->title,
            'owner'=>$this->owner,
            'date'=>$this->date,
            'status_id'=>$this->status_id,
            'status'=>$this->status->title,
            'thumbnail'=>url('/').$this->thumbnail,
        ];

        $details = [
//            'owner'=>$this->user

        ];
        return $is_detail ? array_merge($items,$details) : $items;
    }

    /**
     * @return LogOptions
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Billboard')
            ->logOnly(['title', 'status_id'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "This Billboard {$this->name} has been {$eventName}");
    }
}
