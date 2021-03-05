<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function registerakun(){
        return view('RegisterView');
    }
    
    public function register(Request $request){
        $registerakun= User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)

        ]);
        return "berhasil";
        /*User::create([
            'name'=>'putu',
            'email' => 'putu@gmail.com',
            'password' => Hash::make('admin')
        ]);*/

    }
    
}
