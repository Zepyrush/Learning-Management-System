<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view ('login');
    }

   public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(auth()->user()->level == 'admin') {
                return redirect()->intended('/admin');
            } else if(auth()->user()->level == 'guru') {
                return redirect()->intended('/guru');
            } else if(auth()->user()->level == 'siswa') {
                return redirect()->intended('/siswa');
            }
        }
    
        // Session::flash('status', 'failed');
        // Session::flash('message', 'login gagal');



        return redirect('/')->with([
            'status' => 'failed',
            'message' => 'login gagal' 
        ]);

    }
}