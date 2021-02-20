<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    //get all mata kuliah
    public function getMatakuliah(){
        $mata_kuliah = DB::table('mata_kuliah')->get();
        return [($mata_kuliah)];
    }

    //get nama mata kuliah
    public function getNamaMataKuliah(){
        $nama_mata_kuliah = DB::table('mata_kuliah')->select('nama_mata_kuliah')->get();
        return [($nama_mata_kuliah)];
    }
}
