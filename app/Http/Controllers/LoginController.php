<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function handleLogin(Request $request)
    {
//        dd($request);
        dd($request->all());
//        return view('');
    }
}
