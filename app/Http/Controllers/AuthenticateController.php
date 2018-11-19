<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    //

    public function check(Request $request) {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }else {
            return redirect()->route('login');
        }
    }
    public function logOut(){
        Auth::logout();
        return redirect()->route('login');
    }
}
