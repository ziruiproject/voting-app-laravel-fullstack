<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/vote')
                ->withSuccess('Signed in');
        }

        return redirect('login')->withErrors('Login details are not valid');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }
}
