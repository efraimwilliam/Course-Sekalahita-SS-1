<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    //get all data mahasiswa
    public function getMahasiswa(){
        $mahasiswa = DB::table('mahasiswa')->get();
        return [($mahasiswa)];
    }

    //get 5 data mahasiswa
    public function get5Mahasiswa(){
        $mahasiswa_5 = DB::table('mahasiswa')->where('id', '<', 6)->get();
        $mahasiswa_6 = DB::table('mahasiswa')->limit(5)->get();
        return [($mahasiswa_5)];
    }
}
