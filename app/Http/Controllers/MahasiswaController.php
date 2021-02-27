<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Dosen;


class MahasiswaController extends Controller
{
    //get all data mahasiswa
    public function getMahasiswa(){

        //$mahasiswa = DB::table('mahasiswa')->get();

        $mahasiswa = Mahasiswa::get();

        return view('HelloView', compact('mahasiswa'));
        //return [($mahasiswa)];
    }

    //get 5 data mahasiswa
    public function get5Mahasiswa(){
        $mahasiswa_5 = DB::table('mahasiswa')->where('id', '<', 6)->get();
        $mahasiswa_6 = DB::table('mahasiswa')->limit(5)->get();
        return [($mahasiswa_5)];
    }

    //get matakuliah dari mahasiswa many to many
    public function getDataMataKuliah(){
        $matakuliah = Mahasiswa::find(1)->matakuliah()->get();
        return ($matakuliah);
    }

    //attach(insert) matakuliah
    public function attachMatkul(){
        $attach = Mahasiswa::find(1)->matakuliah()->attach([1,2,3]);

        return ($attach);
    }

    //detach(delete) matkul
    public function detachMatkul(){
        $user = [1,2,3];
        $detach = Mahasiswa::find(1)->matakuliah()->detach($user);

        return ($detach);
    }

    //detach all data
    public function detachAllData(){
        $mahasiswa = Mahasiswa::where ('id', 1)->orWhere('id',2)->orwhere('id',3)->get();

        for($i= 0;$i < count($mahasiswa);$i++){
            $mahasiswa[$i]->matakuliah()->detach([1,2,3]);
        }
        return 'true';
    }

    //sync data (supaya pas di attach itu kalo di run 2 kali engga double)
    public function syncMatkul(){
        $sync = Mahasiswa::find(1)->matakuliah()->sync([1,3]);

        return ($sync);
    }

    public function returnView(){
        $data = true;

        return view('form', compact('data'));
    }

    //update data mahasiswa
    public function updateMahasiswa(){
        $mahasiswa = Mahasiswa::where('id', '6')->update([
            'nama' => 'sayang',
            'dosen_id' => '2'
        ]);
        return $mahasiswa;
    }

    //get data mahasiswa (inverse)
    public function getDataMahasiswa(){
        $getdata = Dosen::find(2);
        $mahasiswa = $getdata -> mahasiswa1()->get();

        return $mahasiswa;
    }


}
