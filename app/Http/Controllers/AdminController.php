<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        /** @var Admin $model */
        $model = Admin::query()->where('email', $request->get('email'))->firstOrFail();

        if(!$model){
            return back()->with('error', 'Email or password is incorrect');
        }

        if (!Hash::check($request->get('password'), $model->password)) {
            return back()->with('error', 'Email or password is incorrect');
        }

        Auth::guard('user')->login($model);

        return redirect()->route('dashboard')
            ->with('success', 'Welcome ' . $model->name . '!');
    }
}
