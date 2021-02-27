<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataKuliah extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'mata_kuliah';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;
    protected $fillable = ['nama_mata_kuliah', 'sks'];

    //one to many from jadwal model
    public function jadwal(){
        return $this->hasMany(Jadwal::class, 'mata_kuliah_id');
    }

    //many to many from table mahasiswa
    public function mahasiswa(){
        //return $this->belongsToMany('app\role', 'user_roles', 'user_id', 'role_id');
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_matkul', 'mata_kuliah_id', 'mahasiswa_id');
    }
}
