<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderNotification extends Notification
{
    use Queueable;
 private $order_id;
 private $order_type;
    private $order_type2;
 private$order_name;
 private $order_from;
 private $order_to;
    /**
     * Create a new notification instance.
     */
    public function __construct($order_id,$order_type,$order_type2,$order_name,$order_from,$order_to)
    {
        $this->order_id=$order_id;
        $this->order_type=$order_type;
        $this->order_type2=$order_type2;
        $this->order_name=$order_name;
        $this->order_from=$order_from;
        $this->order_to=$order_to;


    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        return [
           'order_id'=>$this->order_id,
            'order_type'=>$this->order_type,
            'order_type2'=>$this->order_type2,
            'order_name'=>$this->order_name,
            'order_from'=>$this->order_from,
            'order_to'=>$this->order_to,
        ];
    }
}
