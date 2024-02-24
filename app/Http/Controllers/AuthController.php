<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        //dd($request);


        $user=User::where('phone',$request->phone)->first();
        if (!$user||!Hash::check($request->password,$user->password))
        {
            //dd($request);
            return response(['messqe'=>'not user'],440);

        }
        $user->device_token=$request->device_token;
        $user->save();
        $token=$user->createToken('ali_token')->accessToken;
        return response([
            'token'=>$token
        ]);
    }
    public function logout(Request $request)
    {

        $request->user()->token()->revoke();

    }
    public function check(Request $request)
    {

        $code=rand(111111,999999);
        // send sms
        return response([
            'code'=>$code,

        ]);

    }
    public function signup(Request $request)
    {

        // $data=$this->check($request);
        //return $data;
        $validate= $request->validate([
            'phone'=>'unique:users'
        ]);
        //   dd($validate->error);
        if($validate) {
            $user = User::create(
                [
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'device_token'=>$request->device_token,
                    'type_acount' => $request->type_acount,

                    'password' => Hash::make($request->password),
                ]
            );

            if ($request->type_acount == 'user') {
                $token = $user->createToken('ali_token')->accessToken;
                return response([
                    'token' => $token
                ]);
            }
            //dd($request->tyabe_acount);
            if ($request->type_acount == 'driver') {

                $driver = Driver::create(
                    [
                        'user_id' => $user->id,
                        'type' => $request->type,


                    ]
                );
                $token = $user->createToken('ali_token')->accessToken;
                return response([
                    'token' => $token
                ]);
            }
        }
        else
            return response([
                'massee'=>'kkkkkkkkkk'
            ]);
    }
    public function profile(Request $request)
    {
        // dd($request);

        $driver=Driver::query()->where('user_id','=',$request->user()->id)->get();
        //dd($d);
        return response([
            'user'=>$request->user(),
            'driver'=>$driver
        ]) ;
    }
    public function update(Request $request)
    {


        $user= User::find($request->user()->id);

        $user->name=$request->name;

        $user->type_acount=$request->type_acount;
        $user->save();
        if ($request->type_acount == 'driver')
        {
            $driver=Driver::query()->where('user_id','=',$request->user()->id)->first();
            $driver->type=$request->type;
            $driver->save();

        }

    }

    public function rest_password(Request $request)
    {
        $user=User::find($request->user()->id);
        $user->password = Hash::make($request->password);
        $user->save();


    }
    public function forget_password(Request $request)
    {
        $user=User::where('phone',$request->phone)->first();
        $user->password = Hash::make($request->password);
        $user->save();

    }
    public function update_phone(Request $request)
    {
        $user= User::find($request->user()->id);
        $validate= $request->validate([
            'phone'=>'unique:users'
        ]);
        if ($validate)
        {
            $user=User::find($request->user()->id);
            $user->phone=$request->phone;
            $user->save();
        }

    }
}
