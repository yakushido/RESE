<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show()
    {
        return view('login');
    }

    // public function login(Request $request)
    // {
    //     $email = $request->email;
    //     $password = $request->password;

    //     if(Auth::attempt(['email' => $email, 'password' => $password])){
    //         return view('mypage');
    //     }else{
    //         return view('login');
    //     }
    // }

    public function mypage()
    {
        view('mypage');
    }


    public function login(Request $request)
    {

        $credentials = $request->only('email', 'password');
        dd(Auth::attempt($credentials));

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();

            return route('mypage');
        }

        return back()->withErrors([
            'login_error' => 'メールアドレスかパスワードが間違っています。',
        ]);
    } 
    
    public function logout(Request $request)
    {
        session()->forget('name');
        session()->forget('email');
        return redirect(url('/'));
    }  
}
