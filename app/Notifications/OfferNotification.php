<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OfferNotification extends Notification
{
    use Queueable;
    private $offer_id;
    private $order_id;
    private $driver_id;
    private$offer_price;
    private $offer_accpte;
    private $offer_type;

    public function __construct($offer_id,$order_id,$driver_id,$offer_price,$offer_accpte,$offer_type)
    {
        $this->offer_id=$offer_id;
        $this->order_id=$order_id;
        $this->driver_id=$driver_id;
        $this->offer_price=$offer_price;
        $this->offer_accpte=$offer_accpte;
        $this->offer_type=$offer_type;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [

            'offer_id'=>$this->offer_id,
            'order_id'=>$this->order_id,
            'driver_id'=>$this->driver_id,
            'offer_price'=>$this->offer_price,
            'offer_accpte'=>$this->offer_accpte,
            'offer_type'=>$this->offer_type,
        ];
    }
}
