<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

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

//route::get('/dosen', [DosenController::class,'getDosen']);

route::get('/dosen/putu', [DosenController::class, 'getDosenWhere']);


//Tugas

//Get all dosen
route::get('/dosen', [DosenController::class,'getDosen']);

//Get all mahasiswa
route::get('/mahasiswa', [MahasiswaController::class,'getMahasiswa']);

//Get all mata kuliah
route::get('/matakuliah', [MataKuliahController::class,'getMatakuliah']);

//Get dosen by id
route::get('/dosen/{id}', [DosenController::class, 'getDosenById']);

//get nama mata kuliah
route::get('/matakuliah/nama', [MataKuliahController::class, 'getNamaMataKuliah']);

//get 5 data mahasiswa
route::get('mahasiswa/5', [MahasiswaController::class, 'get5Mahasiswa']);







//Trash
route::get('/dosen/table',[DosenController::class, 'getDosenTable']);