<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Dosen;

class DosenController extends Controller
{
    //get all data
    public function getDosen(){
        $dosen = DB::table('dosen')->get();
        return [($dosen)];
    }

    public function getDosenById($id){
        $dosen_id = DB::table('dosen')->where('id', $id)->get();
        return [($dosen_id)];
    }

    //get first data
    public function getDosenFirst(){
        //$dosen = DB::table('dosen')->get();
        //return [($dosen)];

        return Dosen::get();
    }

    //get data where dosen=
    public function getDosenWhere(){
        $dosen_where = DB::table('dosen')->where('nama','putu')->get();
        return $dosen_where;
    }

    public function getDosenTable(){
        $dosen1 = DB::table('dosen')->get();
        return ($dosen1);
    }

    //create data dosen
    public function createDosen(){
        $dosen = new Dosen;
        $dosen -> nama ="Albert";
        $dosen -> alamat = "jl asing";
        $dosen -> nik = "111234";
        $dosen -> save();

        return $dosen;
    }

}
