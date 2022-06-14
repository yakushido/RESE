<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Fortify;

class UserController extends Controller
{
    // public function show()
    // {
    //     return view('login');
    // }

    public function home()
    {
        return view('home');
    }
    
    // public function logout(Request $request)
    // {
    //     session()->forget('name');
    //     session()->forget('email');
    //     return redirect(url('/'));
    // }  
}
