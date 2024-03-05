<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function index() 
    {
        return view('users.pages.login');
    }

    public function authenticate(Request $request) 
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if ($user->role === 'User') {
                return redirect('/area-tantangan');
            } else if ($user->role === 'Admin') {
                Auth::logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return redirect('/login')->with('loginError', "Email atau password salah!");
            }
        }

        return back()->with('loginError', "Email atau password salah!");
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
