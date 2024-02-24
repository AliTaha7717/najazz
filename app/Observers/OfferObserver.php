<?php

namespace App\Observers;

use App\Models\Admin;
use App\Models\Offer;
use App\Notifications\OfferNotification;
use App\Notifications\OrderNotification;
use Illuminate\Support\Facades\Notification;

class OfferObserver
{
    /**
     * Handle the Offer "created" event.
     */
    public function created(Offer $offer): void
    {


    }

    /**
     * Handle the Offer "updated" event.
     */
    public function updated(Offer $offer)
    {
        if ($offer->accpted == 1)
        {
            $admin=Admin::all();


            Notification::send($admin,new OfferNotification($offer->id,$offer->order_id,$offer->driver->name
                ,$offer->price,0,"offer"));
            return redirect()->route('dashboard2');
        }
return redirect()->route('dashboard2');
    }

    /**
     * Handle the Offer "deleted" event.
     */
    public function deleted(Offer $offer): void
    {
        //
    }

    /**
     * Handle the Offer "restored" event.
     */
    public function restored(Offer $offer): void
    {
        //
    }

    /**
     * Handle the Offer "force deleted" event.
     */
    public function forceDeleted(Offer $offer): void
    {
        //
    }
}
