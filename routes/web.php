<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\TestController;
use App\Http\controllers\MataKuliahBaruController;
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


//get all data with eloquent
route::get('/matkul', [MataKuliahController::class, 'getMatkul']);


//Tugas 1

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


//create mata kuliah
route::get('/matakuliah/create', [MataKuliahController::class, 'createMataKuliah']);

//create mata kuliah with eloquent
route::get('/matakuliah/create1', [MataKuliahController::class, 'createMataKuliah1']);

//create mata kuliah with eloquent model
route::get('/matakuliah/create2', [MataKuliahController::class, 'createMataKuliah2']);

//update mata kuliah
route::get('/matakuliah/update', [MataKuliahController::class, 'updateMataKuliah']);

//update mata kuliah with eloquent
route::get('/matakuliah/update1', [MataKuliahController::class, 'updateMataKuliah1']);

//update mata kuliah with eloquent model
route::get('/matakuliah/update2', [MataKuliahController::class, 'updateMataKuliah2']);

//delete matakuliah
route::get('/matakuliah/delete', [MataKuliahController::class, 'deleteMataKuliah']);

//delete matakuliah with eloqeunt
route::get('/matakuliah/delete1', [MataKuliahController::class, 'deleteMataKuliah1']);

//soft delete
route::get('/matakuliah/delete2', [MataKuliahController::class, 'deleteMataKuliah2']);

//get data with one to many relationship
route::get('/matakuliah/getdata', [MataKuliahController::class, 'getDataMataKuliah']);

//get data with one to many inverse relationship
route::get('/matakuliah/getdata1', [MataKuliahController::class, 'getDataJadwal']);


//get matkul 
route::get('/mahasiswa/matkul', [MahasiswaController::class, 'getDataMataKuliah']);

//attach matkul
route::get('/mahasiswa/attach', [MahasiswaController::class, 'attachMatkul']);

//attach mahasiswa
route::get('matakuliah/attach', [MataKuliahController::class, 'attachMahasiswa']);

//detach matkul
route::get('mahasiswa/detach', [MahasiswaController::class, 'detachMatkul']);

//detach mahasiswa
route::get('matakuliah/detach', [MataKuliahController::class, 'detachMahasiswa']);

//sync matakul
route::get('mahasiswa/sync', [MahasiswaController::class, 'syncMatkul']);



//RESOURCH CONTROLLER
Route::resource('/resource', TestController::class);


//TUGAS 3

route::prefix('tugas')->group(function (){

//create Dosen
Route::get('/dosen/create', [DosenController::class, 'createDosen']);

//Update Data Mahasiswa
Route::get('/mahasiswa/update', [MahasiswaController::class, 'updateMahasiswa']);

//get Data Mahasiswa
Route::Get('mahasiswa/getdata', [MahasiswaController::class, 'getDataMahasiswa']);

});

Route::resource('/matkulr', MataKuliahBaruController::class);