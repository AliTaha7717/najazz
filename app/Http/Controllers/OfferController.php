<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Offer;
use App\Models\Order;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    //
    public function index(Request $request)
    {

        // $order= Order::all()->where('implemented','=','0');
        $offer=Offer::query()->with(['driver','driver.driver'],)->where('order_id','=',$request->order_id)->get();
        //$offer=Offer::find(1)->driver;
        // $order= Order::find(1);

        //dd($order);
        return response([
            'offer'=>$offer
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $offer=Offer::create([
                'user_id'=>$request->user()->id,
                'order_id'=>$request->order_id,
                'price'=>$request->price,



            ]


        );
        return response([
            $offer
        ]);
    }

    public function accept(Request $request)
    {
        $offer=Offer::find($request->id);
        $order=Order::find($offer->order_id);
        $order->implemented=1;
        $offer->accepted=1;
        $order->save();
        $offer->save();
        Bill::create([
            'offer_id'=>$request->id,
            'continued'=>0,
            'rest'=>$offer->price,
            'commission'=>$offer->price*0.05
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, )
    {
        $offer=Offer::find($request->id);
        $offer->price=$request->price;
        $offer->save();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Offer::find($request->id)->delete();
    }

    public function my_offer(Request $request)
    {
        $order=Order::query()->with('offer')->whereRelation('offer.driver','id','=',$request->user()->id);
        return response([
            'order'=>$order
        ]);
    }
}
