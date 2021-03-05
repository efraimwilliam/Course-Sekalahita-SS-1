<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function loginpage(){
        return view('LoginView');
    }

    public function login(Request $request){
        //logic loginpage
        $credentials = $request->only(['email','password']);
        if(Auth::attempt($credentials)){
            return redirect('/welcome');
        }

        return redirect('/logins');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/logins');
    }
}
