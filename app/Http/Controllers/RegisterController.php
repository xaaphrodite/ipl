<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.Register');
    }
    public function store(Request $request)
    {
        $userEmail = $request->email;
        $request->validate([
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
            'confirm' => 'required|same:password',
        ]);

        try {
            User::create([
                'email' => $userEmail,
                'password' => Hash::make($request->confirm)
            ]);

            return redirect('/')->with('UserCreated', "You can login with email {$userEmail}");
        } catch (\Throwable $th) {
            return redirect('/')->with('UserCreated', "The system is under maintenance, please try again later.");
        }
    }
}
