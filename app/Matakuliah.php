<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model{
    protected $table = 'alfin.mata_kuliah';
    protected $guarded = []; 

    public function jurusan(){
        return $this->belongsTo('App\Jurusan','id_jurusan','id');
    }
}
