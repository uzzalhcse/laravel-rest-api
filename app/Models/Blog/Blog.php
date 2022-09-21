<?php

namespace App\Models\Blog;

use App\Traits\ScopeActive;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Blog extends Model
{
    use HasFactory, Status, ScopeActive,LogsActivity;
    protected $fillable = ['user_id','title','thumbnail','banner','body','status_id'];

    public function formatResponse($is_detail =  false): array
    {
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'date'=>$this->created_at->format('d M'),
            'thumbnail'=>url('/').$this->thumbnail,
            'banner'=>url('/').$this->banner,
            'body'=>$is_detail ? $this->body : substr($this->body,0,50-3).'...' ,
        ];
    }

    /**
     * @return LogOptions
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('Blog')
            ->logOnly(['title', 'status_id'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "This blog has been {$eventName}");
    }
}
