<?php

namespace App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Offer;
use App\Models\Order;
use Illuminate\Http\Request;


class OfferController extends Controller
{
    public function index()
    {
        $stute='All Offer';
        $date=Offer::all();
        return view('offer.index',compact('date','stute'));
    }
    public  function done_offer()
    {
        $stute='Complited Offer';
        $date=Offer::where('accepted','1')->get();
        return view('offer.order_offer',compact('date','stute'));

    }

public  function waiting_offer()
{
    $stute='Unaccpted Offer';
    $date=Offer::where('accepted',0)->get();
    return view('offer.index',compact('date','stute'));
}


    public  function offer_order()
    {

        $stute='Offer and Order';
        $date=Offer::where('accepted','1')->where('implemented','0')->get();
        return view('offer.order_offer',compact('date','stute'));
    }

    public function show($id)
    {

        $stute='Show New offer';




        $admin_id=Auth::User()->id;
        $getid= DB::table('notifications')
            ->where('notifiable_id',$admin_id )
            ->where( 'data->offer_id',$id)

            ->where( 'type','App\Notifications\OfferNotification')->pluck('id');


        DB::table('notifications')->where('notifiable_id',$admin_id )
            ->where( 'id',$getid)->update(['read_at'=>now()]);
        ///return $getid;
        $date=Offer::where('id',$id)->get();
        return view('offer.index',compact('date','stute'));
    }
    public function deletenot(){

        $delete=Admin::find(auth()->user()->id);

        foreach ($delete->unreadNotifications->where('type','=','App\Notifications\OfferNotification') as $item)
        {
            $item->markAsRead();
            //$item->delete();
        }
        return redirect()->back();
    }

}

