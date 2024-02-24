<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view('user.index',compact('users'));
        //return $users;
    }
    public function index_driver()
    {
        $users=User::where('type_acount','driver')->get();
      //  $users=User::find(2);

//        echo($users->driver->has_dl);
//        echo($users->driver->type);
//        echo($users->driver->verified);
       return view('user.driver',compact('users'));
        //return $users;
    }
    public function index_dealer()
    {
        $users=User::where('type_acount','dealer')->get();
        return view('user.index',compact('users'));
        //return $users;
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $date= User::create([
            'name'=>$request->name,
           'title'=>$request->title,
            'type_acount'=>$request->type_acount,
            'phone'=>$request->phone,
            'password'=>$request->password,
           'weight'=>$request->weight,

           'description'=>$request->description,
           'near_to'=>$request->near_to,
           'near_from'=>$request->near_from,
           'type_order'=>$request->type_order,
           'user_id'=>$request->user_id,
        ]);
        if($request->type_acount=='driver')
        {

            Driver::create([

                'type'=>'ثقيل',
                'user_id'=>$date->id,
            ]);
        }
        return redirect()->route('user.index');
       // return response('تمت الاضافة بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users=User::find($id);
        return view('order.orderof_dealer',compact('users'));
    }
    public function show_user( $id)
    {
        $users=User::where('id',$id)->get();
        return view('user.show_user',compact('users'));
    }
    public function show_offer( $id)
    {$stute="Driver_Offer";
        $date=User::find($id);
        return view('offer.user_offer',compact('date','stute'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::findorFail($id);
        return view('user.edit',compact('user'));
    }
    public function edit_cardid(string $id)
    {
        $user=User::findorFail($id);
        $user->has_id=1;
        $user->save();
        $users=User::all();
     return redirect()->route('user.index');

    }
    public function edit_license(string $id)
    {
        $user=Driver::query()->where('user_id','=',$id);
        $user->update(['has_dl'=>1,]);

        //$users=User::all();
        return redirect()->route('driver');


    }
    public function edit_verified(string $id)
    {
        $user=Driver::query()->where('user_id','=',$id);
        $user->update(['verified'=>1,]);

        //$users=User::all();
        return redirect()->route('driver');

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
