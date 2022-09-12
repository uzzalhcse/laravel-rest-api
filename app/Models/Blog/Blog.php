<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','thumbnail','banner','body','status_id'];



    public function scopeActive($query){
        return $query->where('status_id',1);
    }

    public function formatResponse(): array
    {
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'date'=>$this->created_at->format('d M'),
            'thumbnail'=>url('/').$this->thumbnail,
            'banner'=>url('/').$this->banner,
            'body'=>$this->body,
        ];
    }
}
