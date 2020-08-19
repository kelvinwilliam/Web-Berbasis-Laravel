<?php

namespace App\Http\Controllers;


use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function postlogin(request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/home');
        } else {
            return redirect('/login');
        };
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function register(request $request)
    {
        return view('auth.register');
    }

    public function postregister(request $request)
    {
        $save_password = bcrypt($request->password);

        user::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $save_password
        ]);

        if(Auth::attempt($request->only('username','password'))){
            return redirect('/home');
        } else {
            return redirect('/register');
        };
    }
    
}
