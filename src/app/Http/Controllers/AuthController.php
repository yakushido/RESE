<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function add(Request $request)
    {
        $client_data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        return view('thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
