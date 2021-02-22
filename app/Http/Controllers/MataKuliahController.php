<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\MataKuliah;
use App\Models\Jadwal;

class MataKuliahController extends Controller
{
    //get all mata kuliah
    public function getMatakuliah(){
        $mata_kuliah = DB::table('mata_kuliah')->get();
        return [($mata_kuliah)];
    }

    //get all with eloquent
    public function getMatkul(){
        $mata_kuliah = MataKuliah::get();

        return $mata_kuliah;
    }

    //get nama mata kuliah
    public function getNamaMataKuliah(){
        $nama_mata_kuliah = DB::table('mata_kuliah')->select('nama_mata_kuliah')->get();
        return [($nama_mata_kuliah)];
    }

        //create data
        public function createMataKuliah(){
            $create_dosen = DB::table('mata_kuliah')->insert([
                [
                'nama_mata_kuliah' => 'Internet of Things',
                'sks' => '3'
                ],
                [
                    'nama_mata_kuliah' => 'teknologi big data',
                    'sks' => '3'
                ]
            ]);
    
            return ($create_dosen);
        }

        //create data with eloquent
        public function createMataKuliah1(){
            $mata_kuliah = new MataKuliah;
            $mata_kuliah -> nama_mata_kuliah ="Praktikum Alprog";
            $mata_kuliah -> sks = "1";
            $mata_kuliah -> save();

            return $mata_kuliah;
        }

        //create (cuman bisa 1 array)
        //insert (lebih dari 1 array)
        public function createMataKuliah2(){
            $create_dosen = MataKuliah::insert(
                [
                    'nama_mata_kuliah' => 'basis data',
                    'sks' => '2'
                ]
            );
            return ($create_dosen);    
        }
        
        //update mata kuliiah
        public function updateMataKuliah(){
           $update_mata_kuliah = DB::table('mata_kuliah')->where('id', 13)->update(['sks' => 3]);
        }
        
        //update with eloquent
        public function updateMataKuliah1(){

            $mata_kuliah = MataKuliah::find(13);
            $mata_kuliah -> sks = "5";

            $mata_kuliah -> save();

            return $mata_kuliah;
        }
        
        //update with eloquent model
        public function updateMataKuliah2(){
            $update_matakul = MataKuliah::where('id', '13')->update(
                [
                    'sks' => '3'
                ]
            );
            return ($update_matakul);    
        }

        //delete mata kuliah
        public function deleteMataKuliah(){
            $delete_matkul = DB::table('mata_kuliah')->where('id', '12')->delete();

            return $delete_matkul;
        }

        //delete mata kuliah with eloquent
        public function deleteMataKuliah1(){
            $delete_matkul = MataKuliah::where('id', '11')->delete();
        }

        //soft delete
        public function deleteMataKuliah2(){
            $delete_matkul = MataKuliah::where('id', '10')->delete();

            return $delete_matkul;
        }

        //get data with one to many relationship
        public function getDataMataKuliah(){
            $getdata = MataKuliah::find(1);
            $jadwal = $getdata -> jadwal()->where('hari', 'selasa')->get();

            return ($jadwal);
        }

        //get data jadwal with one to many inverse relationship
        public function getDataJadwal(){
            $getdata = Jadwal::find(1);
            $matkul = $getdata -> matakuliah()->get();

            return $matkul;
        }
}
