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
    public function formatResponse($is_detail = false, $sender_id = null){
        if (!$sender_id){
            if (isset(request()->sender_id)){
                $sender_id = request()->sender_id;
            } else{
                $sender_id = auth()->id();
            }
        }
        $body = $is_detail ? $this->body : substr($this->body,0,30-3).'...' ;
        if ($this->type == 'image'){
            $body = url($this->body);
        }
//        $user->id == $item->sender_id && $sender_id == $item->receiver_id? $item->sender->photo_url : $item->receiver->photo_url
        $actor = auth()->id() == $this->receiver_id && $this->receiver_id == $sender_id ? $this->receiver : $this->sender;
//        $actor = $this->receiver_id == auth()->id() ? $this->sender : $this->receiver;
        return [
            'body'=>$body,
            'type'=>$this->type,
            'name'=>$actor->name,
            'avatar'=>$actor->avatar,
            'time'=>$this->time,
            'sender_id'=>$this->sender_id,
            'receiver_id'=>$this->receiver_id,
//            'is_sender'=>$this->sender_id == auth()->id(),
        ];
    }

    public function formatMedia(){
        return [
            'path'=>url($this->body),
            'type'=>$this->type,
            'time'=>$this->time,
        ];
    }
}
