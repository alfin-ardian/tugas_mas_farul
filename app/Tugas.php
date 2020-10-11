<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model{
    protected $table = 'alfin.mahasiswa';
    protected $guarded = []; 

    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }

    public function matakuliah(){
        return $this->belongsTo('App\Matakuliah','id_matakuliah','id');
    }
}
