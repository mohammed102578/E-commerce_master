<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;

use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;



class NewNotification
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */

public $title;
public $message;
public $vendorName;
public $date;
public $time;


    public function __construct($data)
    {
        $this->title=$data['title'];
        $this->message=$data['message'];
        $this->vendorName=$data['vendor_name'];
        $this->date=date('Y M d',strtotime(Carbon::now()));
        $this->time=date('h:i A',strtotime(Carbon::now()));
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        //return new channel('new-notification')
        return ['new-notification'];
    }
}
