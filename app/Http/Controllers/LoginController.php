<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.Login');
    }
    public function store(Request $request)
    {
        $attributes =  $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($attributes)) {
            return redirect(RouteServiceProvider::HOME)->with('successLogin', 'Login success!');
        } else {
            return redirect('/')->with('unrecognized', 'Unrecognized, wrong password or email');
        }
    }
}
