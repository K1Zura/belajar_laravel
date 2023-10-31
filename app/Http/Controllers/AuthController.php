<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticating(Request $request ) 
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infoLogin)) {
            return redirect('/')->with('success', 'Berhasil Login');
            }else{
                return redirect('/login')->withErrors('Username Tidak Valid');
            
        }
        Session::flash('status','failed');
		Session::flash('message','Login Wrong!!');

        return redirect('/login');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');

    }
}
