<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        return $this->middleware('guest')->except('logout');
    }


    public function signup(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "password" => "required|string|min:6"
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);

        session()->flash('success', 'Your account has been created successfully. Now login');

        return view('login');
    }


    public function signin(Request $request)
    {
        $credentials = $request->validate([
            "name" => "required|string",
            "password" => "required|string|min:6"
        ]);

        $user = User::where('name', $credentials['name'])->first();

        if (Hash::check("password", $user->password)) {
            dd('valid credentials');
        }
        dd($user);

        if (Auth::attempt($credentials)) {
            dd('valid credentials');
            return redirect()->route('home');
        }

        session()->flash('message', 'Invalid credentials');
        return redirect()->back();
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.signin');
    }
}