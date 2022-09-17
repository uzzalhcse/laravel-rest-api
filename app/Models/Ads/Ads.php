<?php

namespace App\Models\Ads;

use App\Models\Auth\User;
use App\Models\Share\Media;
use App\Traits\ScopeActive;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory,ScopeActive,Status;

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
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
    public function advertiser(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function formatResponse(): array
    {
        $res = [
            'id'=>$this->id,
            'title'=>$this->title,
            'advertiser'=>$this->advertiser,
            'date'=>$this->created_at->format('Y'),
            'thumbnail'=>url('/').$this->thumbnail,
            'aired'=>$this->created_at->format('Y-m-d'),
            'description'=>$this->description,
            'audio'=>url('/').$this->audio,
            'banner'=>url('/').$this->banner,
            'rating'=> 4.2,
            'status'=>$this->status->title
        ];
        return $res;
    }
}
