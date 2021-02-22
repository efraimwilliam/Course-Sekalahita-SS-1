<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jadwal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'jadwal';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;
    protected $fillable = ['hari', 'mata_kuliah_id'];

    //inverse one to many
    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class, 'mata_kuliah_id');
    }

}
