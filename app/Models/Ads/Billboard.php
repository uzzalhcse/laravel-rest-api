<?php

namespace App\Models\Ads;

use App\Models\Auth\User;
use App\Models\Share\Media;
use App\Traits\ScopeActive;
use App\Traits\Status;
use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billboard extends Model
{
    use HasFactory,ScopeActive,Status, Utils;

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function getThumbnailAttribute(){
        return $this->media->where('media_type','thumbnail')->first()->path;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function formatResponse($is_detail =  false): array
    {
        $items = [
            'id'=>$this->id,
            'title'=>$this->title,
            'date'=>$this->date,
            'status'=>$this->status->title,
            'thumbnail'=>url('/').$this->thumbnail,
        ];

        $details = [
            'owner'=>$this->user,
            'date'=>$this->date

        ];
        return $is_detail ? array_merge($items,$details) : $items;
    }
}
