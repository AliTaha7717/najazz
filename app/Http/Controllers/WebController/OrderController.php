<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Offer;
use App\Models\Order;
use App\Models\User;
use App\Notifications\OrderNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title='All Order';
        $users=Order::all();
//
        return view('order.index',compact('users','title'));

      //  return $users;
    }
    public function wating_order()
    {
        $title='Waitting Order';

        $users=Order::where('implemented','0')->get();

        return view('order.index',compact('users','title'));
//        return $users;
    }
    public function done_order()
    {

$title='Complet Order';
        $users=Order::where('implemented','1')->get();

        return view('order.index',compact('users','title'));
//        return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  $order=Order::create([
         'user_id'=>$request->user()->id,
         'type'=>$request->type,
         'title'=>$request->title,
         'type_order'=>$request->type_order,
         'from'=>$request->from,
         'to'=>$request->to,
         'from_time'=>$request->from_time,
         'to_time'=>$request->to_time,
         'near_from'=>$request->near_from,
         'near_to'=>$request->near_to,
         'description'=>$request->description,




     ]);


        return redirect()->route('order.index');
    // return response('تمت الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {$title='Show New Order';

        //$order=Order::find($id);
        $admin_id=Auth::User()->id;
       $getid= DB::table('notifications')->where('notifiable_id','=',$admin_id )
           ->where( 'data->order_id','=',$id)->pluck('id');

       //return $getid;
        DB::table('notifications')->where('notifiable_id','=',$admin_id )
            ->where( 'id','=',$getid)->update(['read_at'=>now()]);
        $users=Order::where('id',$id)->get();
        return view('order.index',compact('users','title'));


    }    public function show_offer( $id)
{$stute='Show Offer Of Order';
    $date=Offer::query()->where('order_id','=',$id)->get();

    //return $date;
    //$date=Order::find($id);
    return view('offer.show_offer',compact('date','stute'));


}

    public function deletenot(){

        $delete=Admin::find(auth()->user()->id);

        foreach ($delete->unreadNotifications->where('type','=','App\Notifications\OrderNotification') as $item)
        {
            $item->markAsRead();
            //$item->delete();
        }
        return redirect()->back();
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::findorFail($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=User::findorFail($id);
        $user->update(

            [
                'name'=>$request->name,
                'password'=>$request->password,
                'type_acount'=>$request->type_acount,
                'phone'=>$request->phone,

            ]
        );

        return redirect(route('user.index',compact('user')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect(route('user.index'));
    }
}
