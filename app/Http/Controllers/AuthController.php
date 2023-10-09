<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // validate data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // Attempt to authenticate the user
        if (\Auth::attempt($request->only('email', 'password'))) {
            return redirect('input');
        }

        return redirect('login')->withError('Login details are not valid');
    }

    public function inputView()
    {
        return view('input');
    }

    public function home()
    {
        return view('home');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect('');
    }
}
