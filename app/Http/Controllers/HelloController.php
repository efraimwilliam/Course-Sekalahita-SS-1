<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //function CURD
    public function getUser(){
        return('ini adalah user');
    }

    public function getUserById($id){
        return('ini adalah user dengan id '.$id);
    }

    public function returnView($id){    //harus berhubungan dengan route di web.php
        $user = 'efraim';
        $user1 = 'william';
        return view('HelloView', compact('user', 'user1', 'id')); //satu string satu nama
    }

    public function returnView1(){
        return view('welcome');
    }

    public function branchTest(){
        return ('test');
    }
}
