<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $order= Order::all()->where('implemented','=','0');
        $order=Order::query()->with(['owner','offer','offer.driver','offer.driver.driver'])->where('implemented','=','0')->get();
        // $order= Order::find(1);

        //dd($order);
        return response([
            'order'=> $order
        ]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order=Order::create([
                'user_id'=>$request->user()->id,
                'type'=>$request->type,
                'titel'=>$request->titel,
                'type_order'=>$request->type_order,
                'from'=>$request->from,
                'to'=>$request->to,
                'from_time'=>$request->from_time,
                'to_time'=>$request->to_time,
                'near_from'=>$request->near_from,
                'near_to'=>$request->near_to,
                'description'=>$request->description,




            ]

        );
        $drivers=User::query()->where('type_acount','=','driver')->get();
        $message=''.$request->user()->name.'';
        $title='';

        foreach ($drivers as $driver )
        {
            SendNotyController::send($message,$driver->device_token,$title);
        }
    }



    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, )
    {
        $order=  Order::find($request->id);
        $order->user_id=$request->user()->id;
        $order->type=$request->type;
        $order->titel=$request->titel;
        $order->type_order=$request->type_order;
        $order->from=$request->from;
        $order->to=$request->to;
        $order->from_time=$request->from_time;
        $order->to_time=$request->to_time;
        $order->near_from=$request->near_from;
        $order->near_to=$request->near_to;
        $order->description=$request->description;
        $order->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        Order::find($request->id)->delete();
    }
    public function my_order(Request $request)
    {
        $order=Order::query()->with(['offer','owner','offer.driver','offer.driver.driver'])
            ->whereRelation('owner','id','=',$request->user()->id)
            ->where('implemented','=','0')->get();
        return response(['order'=> $order]);
    }
    public function my_wati_order (Request $request)
    {
        $order=Order::query()->with(['offer','owner','offer.driver','offer.driver.driver'])
            ->whereRelation('owner','id','=',$request->user()->id)
            ->where('implemented','=','0')->whereRelation('offer','implemented','=','0')->get();
        return response(['order'=> $order]);
    }
    public function my_last_order (Request $request)
    {
        $order=Order::query()->with(['offer','owner','offer.driver','offer.driver.driver'])
            ->whereRelation('owner','id','=',$request->user()->id)
            ->where('implemented','=','0')->whereRelation('offer','implemented','=','1')->get();
        return response(['order'=> $order]);
    }
}
