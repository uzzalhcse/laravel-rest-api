<?php

namespace App\Http\Controllers;

use App\Events\MessageSentEvent;
use App\Events\SyncContactEvent;
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
        $auth = Auth::guard('api')->user();

        $messages = collect();
        $items = Message::with('receiver','sender')
            ->where('sender_id',\auth()->user()->id)
            ->where('receiver_id',$sender_id)
            ->get();
        $items2 = Message::with('receiver','sender')
            ->where('sender_id',$sender_id)
            ->where('receiver_id',\auth()->user()->id)
            ->get();
        $items = $items->merge($items2)->sortBy('created_at')->values();
//        foreach ($items as $item){
//            $actor = $auth->id == $item->receiver_id && $sender_id == $item->receiver_id? $item->sender->avatar : $item->receiver->avatar;
//            $messageList[]=[
//                'body'=>$item->body,
//                'type'=>$item->type,
//                'name'=>'$actor->name',
//                'avatar'=>$actor,
//                'time'=>$item->time,
//                'is_sender'=>$item->sender_id == $auth->id,
//            ];
//        }

        $messageList = $items->map->formatResponse(true,$sender_id);
        return $this->success('Message List',[
            'messages'=>$messageList,
            'media_items'=>$items->where('type','image')->map->formatMedia()->values(),
            'user'=>$sender->formatResponse()
        ]);
    }

    public function contacts(): JsonResponse
    {

        $auth = Auth::guard('api')->user();
        $contacts = $this->myContacts($auth);
        return $this->success('My contacts',[
            'contacts'=>$contacts
        ]);

    }
    public function myContacts($auth){
        $customerCareUser = User::find(User::CUSTOMER_CARE_USER_ID);
        $received_messages = Message::with('sender')
            ->whereHas('sender', function ($q){
                $q->whereNull('deleted_at');
            })
            ->where('receiver_id',$auth->id)
            ->get()->pluck('sender_id');

        $send_messages = Message::with('receiver')
            ->whereHas('receiver', function ($q){
                $q->whereNull('deleted_at');
            })
            ->where('sender_id',$auth->id)
            ->get()->pluck('receiver_id');
        $recipients = $received_messages->merge($send_messages)->unique()->values();
//        info($recipients);

        $items = collect();
        $contacts = collect();

        foreach ($recipients as $contact){
            $msg = Message::with('sender')->where('sender_id',$auth->id)
                ->where('receiver_id', $contact)
                ->orWhere(function ($query) use ($auth, $contact) {
                    $query->where('sender_id', $contact);
                    $query->where('receiver_id', $auth->id);
                })->orderByDesc('created_at')->limit(1)->first();
            if ($msg){

                $items[] = $msg;
            }

        }
        $items = $items->sortByDesc('created_at');

        foreach ($items as $item){
            if ($item->receiver_id === $auth->id){

                $contacts[]=[
                    'name'=>$item->sender?->name,
                    'avatar'=>$item->sender?->avatar,
                    'type'=>$item->sender?->type,
                    'id'=>$item->sender_id,
                    'last_msg_type'=>$item->type,
                    'last_msg'=>$item->type == 'image' ? url($item->body) : substr($item->body,0,30-3).'...',
                    'last_msg_at'=>$item->time,
                ];
            } else{

                $contacts[]=[
                    'name'=>$item->receiver->name,
                    'avatar'=>$item->receiver->avatar,
                    'type'=>$item->receiver->type,
                    'id'=>$item->receiver_id,
                    'last_msg_type'=>$item->type,
                    'last_msg'=>$item->type == 'image' ? url($item->body) : substr($item->body,0,30-3).'...',
                    'last_msg_at'=>$item->time,
                ];
            }
        }
        if (count($contacts) <1 && $customerCareUser->id != $auth->id){
            $contacts[]=[
                'name'=>$customerCareUser->name,
                'avatar'=>$customerCareUser->avatar,
                'type'=>'text',
                'id'=>$customerCareUser->id,
                'last_msg'=>null,
                'last_msg_type'=>null,
                'last_msg_at'=>'',
            ];
        }
        return $contacts;
    }

    public function sendMessage(MessageRequest $request){
        $user = Auth::guard('api')->user();

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
        $auth = User::find($message->receiver_id);
        $contacts = $this->myContacts($auth);


        broadcast(new MessageSentEvent($message->receiver_id, $message));
        broadcast(new SyncContactEvent($message->receiver_id, $contacts));
        return $this->success('Message Sent!');
    }
}
