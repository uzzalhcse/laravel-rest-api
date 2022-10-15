<?php

namespace App\Models;

use App\Models\Auth\User;
use App\Traits\Utils;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory, Utils;

    public function sender()
    {
        return $this->belongsTo(User::class,'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class,'receiver_id');
    }

    public function formatResponse($is_detail = false){
        return [
            'body'=>$is_detail ? $this->body : substr($this->body,0,30-3).'...' ,
            'type'=>$this->url,
            'avatar'=>$this->sender_id == auth()->id() ? $this->sender->avatar : $this->receiver->avatar,
            'time'=>$this->time,
            'is_sender'=>$this->sender_id == auth()->id(),
        ];
    }
}
