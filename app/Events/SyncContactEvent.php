<?php

namespace App\Events;

use App\Models\Auth\User;
use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SyncContactEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * User that sent the message
     *
     * @var User
     */
    public $receiver_id;

    /**
     * Message details
     *
     * @var Message
     */
    public $contacts;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($receiver_id, $contacts)
    {
        info("receiver ID ".$receiver_id);
        $this->receiver_id = $receiver_id;
        $this->contacts = $contacts;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat-contacts.'.$this->receiver_id);
    }

    public function broadcastAs()
    {
        return 'ContactListEvent';
    }
}
