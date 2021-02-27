<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    public $fillable = ['nama', 'alamat', 'nim'];

    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;

    //many to many from table matakuliah
    public function matakuliah(){
        return $this->belongsToMany(MataKuliah::class, 'mahasiswa_matkul', 'mahasiswa_id', 'mata_kuliah_id');
    }

    //inverse one to many dosen mahasiswa
    public function dosen(){
        return $this->belongsTo(Dosen::class, 'dosen_id');
    }
}
