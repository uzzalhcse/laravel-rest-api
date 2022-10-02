<?php

namespace App\Models\Share;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $guarded = [];
//    protected $appends = ['path_url'];

    public function mediable(){
        return $this->morphTo();
    }

    public function getPathUrlAttribute(){
        return url($this->path);
    }


    public function formatResponse(){
        return [
            'id'=>$this->id,
            'media_type'=>$this->media_type,
            'path'=>$this->path,
            'path_url'=>url($this->path),
            'mediable_id'=>$this->mediable_id,
            'player'=>[
                'isPlaying'=>false
            ],
            'route_name'=>$this->mediable->route_name,
        ];
    }
}
