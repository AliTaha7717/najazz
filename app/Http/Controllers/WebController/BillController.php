<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use App\Models\Driver;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(Request $request)
    {

    }
    public function show(string $id)
    {
        $date=Bill::where('offer_id','=',$id)->get();
        //$date=Bill::query()->where('offer_id','=',$id);



        //$users=User::all();
        return view('bill.index',compact('date'));
//        return redirect()->route('bill.index');
    }
    public function edit(string $id)
    {$date=Bill::find($id);


        return view('bill.edit',compact('date'));


    }
    public function update(Request $request ,)
    {$date=Bill::find($request->id);

        $date->update([
'continued'=>$date->continued+$request->continued,
            'rest'=>$request->rest-$request->continued,
        ]);

        $date=Bill::where('id','=',$request->id)->get();

        return view('bill.index',compact('date'));


    }
}
