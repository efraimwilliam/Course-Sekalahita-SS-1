<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;

    //one to many dosen mahasiswa
    public function mahasiswa1(){
        return $this->hasMany(Mahasiswa::class, 'dosen_id');
    }

    //many to many dosen mata kuliah
    public function matkul(){
        return $this->belongsToMany(MataKuliah::class, 'dosen_matkul', 'dosen_id', 'mata_kuliah_id');
    }
}
