<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
    public function login(Request $request)
    { //magic with auth whoooshhh
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect('/');
        }
    }
    public function logout(Request $request)
    {
        // $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
