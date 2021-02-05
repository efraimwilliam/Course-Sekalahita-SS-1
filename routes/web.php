<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang/{id}/detail/{detail}', function($id, $detail){
    return('nama barang dengan id '.$id.'dengan detail '.$detail);
});

Route::prefix('login')->group(function (){
    route::get('/admin', function (){
        return('selamat datang admin');
    });
    route::get('/user', function (){
        return('selamat datang user');
    });
    route::get('/user/{login}', function ($login){
        return('hallo user '.$login);
    });
});

route::get('/user',[HelloController::class, 'getUser']);

route::get('/user/{id}',[HelloController::class, 'getUserById']);

route::get('/view/{id}',[HelloController::class, 'returnView']);
