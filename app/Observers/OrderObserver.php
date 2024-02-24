<?php

namespace App\Observers;

use App\Models\Admin;
use App\Models\Order;
use App\Notifications\OrderNotification;
use Illuminate\Support\Facades\Notification;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     */
    public function created(Order $order): void
    {
        $admin=Admin::all();
        //$admin=Admin::find(1);
        //  $user=User::where('type_acount','driver')->get();

        Notification::send($admin,new OrderNotification($order->id,$order->type,"order",$order->owner->name,$order->from,$order->to));


    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "deleted" event.
     */
    public function deleted(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     */
    public function restored(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     */
    public function forceDeleted(Order $order): void
    {
        //
    }
}
