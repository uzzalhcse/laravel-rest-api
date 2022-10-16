<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Auth\User;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends ApiController
{
    public function fetchMessages($sender_id){
        $sender = User::findOrFail($sender_id);
        $messages = Message::where('sender_id',$sender->id)
            ->orWhere('receiver_id',$sender->id)
            ->orWhere('sender_id',Auth::id())
            ->orWhere('receiver_id',Auth::id())
            ->get();
        $messageList = $messages->map->formatResponse(true)->groupBy('time');
        return $this->success('Message List',[
            'messages'=>$messageList,
            'media_items'=>$messages->where('type','image')->map->formatMedia()->values(),
            'user'=>$sender->formatResponse()
        ]);
    }

    public function contacts(): JsonResponse
    {
        $auth = Auth::user();
        $messages = Message::where('sender_id',$auth->id)
            ->orWhere('receiver_id',$auth->id)
            ->get();

        $recipients = $messages->pluck('sender_id','receiver_id')->keys();

        $users = User::whereNot('id',$auth->id)->whereIn('id',$recipients)->get();
        $contacts = array();

        foreach ($users as $user){
            $contacts[] = [
                'name'=>$user->name,
                'avatar'=>$user->avatar,
                'id'=>$user->id,
                'last_msg'=>$messages->last()->formatResponse(),
                'last_msg_at'=>$messages->last()->time
            ];
        }

        return $this->success('My contacts',[
            'contacts'=>$contacts
        ]);

    }

    public function sendMessage(MessageRequest $request){
        $user = Auth::user();

        $message = new Message();
        $message->sender_id = $user->id;
        $message->receiver_id = $request->receiver_id;
        $message->type = $request->type;
        if ($request->type == 'image'){
            $pathname = upload_file($request,'file','/media/msg/', 'msg_image');
            $message->body = $pathname;
        }else{
            $message->body = $request->body;
        }
        $message->save();
//        $message = $message->load('sender','receiver');
//        broadcast(new MessageSent($message->receiver_id, $message));
        return $this->success('Message Sent!');
    }
}
