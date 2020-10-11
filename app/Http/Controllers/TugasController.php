<?php
namespace App\Http\Controllers;

use App\Tugas;
use App\Matakuliah;
use Illuminate\Http\Request;

class TugasController extends Controller{

    public function _1(Request $request){
        return Tugas::where('name', 'like', '%' . $request->name . '%')->orderBy('id', 'desc')->get();
    }

    public function _2(){
        return Tugas::join('jurusan', 'jurusan.id', 'mahasiswa.id_jurusan')
        ->select('mahasiswa.name')
        ->paginate(2);
    }

    public function _3(Request $request){
        return Tugas::join('jurusan', 'jurusan.id', 'mahasiswa.id_jurusan')
        ->where('jurusan.name', '' . $request->jurusan_name )
        ->select('mahasiswa.name')
        ->orderBy('name', 'desc')
        ->paginate(2);
    }

    public function _5(Request $request, $id){
        return Tugas::where('id',$id)->update($request->all());
    }

    public function _6(){
        return Matakuliah::join('jurusan', 'jurusan.id', 'mata_kuliah.id_jurusan')
        ->select('mata_kuliah.name')
        ->get();
    }

    public function _7(){
        return Tugas::join('mata_kuliah', 'mata_kuliah.id', 'mahasiswa.id_matakuliah')
        ->select('mahasiswa.name')
        ->orderBy('name', 'desc')
        ->get();
    }
}
