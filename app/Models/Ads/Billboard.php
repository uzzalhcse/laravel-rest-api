<?php

namespace App\Models\Ads;

use App\Models\Share\Media;
use App\Traits\ScopeActive;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billboard extends Model
{
    use HasFactory,ScopeActive,Status;

    public function media()
    {
        return $this->morphMany(Media::class, 'mediable');
    }

    public function getThumbnailAttribute(){
        return $this->media->where('media_type','thumbnail')->first()->path;
    }

    public function formatResponse(): array
    {
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'thumbnail'=>url('/').$this->thumbnail,
        ];
    }
}
