<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function counter()
    {
        $order=\App\Models\Order::all()->count();


        $offer=Offer::all()->count();

        $user1=User::all()->count();


        $user2=User::where('type_acount','dealer')->count();


return view('dashboard',compact('order','offer','user1','user2'));
    }
    public function natifiaction()
    {



        return view('natifiaction',);
    }
}
