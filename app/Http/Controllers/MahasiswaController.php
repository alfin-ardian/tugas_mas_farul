<?php
namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class MahasiswaController extends Controller{
        public function index(Request $request){
            return Mahasiswa::get(); //get all data
            // return Mahasiswa::where('name', 'Like', '%$request->name%')->get();
            // return Mahasiswa::where('id_jurusan', $request->id_jurusan)->paginate(); //ini adalah filtering
            // return Mahasiswa::orderBy('id', 'desc')->get(); //ini adalah sorting
            // return Mahasiswa::paginate($request->limit); //ini adalah pagination
            // return Mahasiswa::with('jurusan')->get(); ///ini adalah relasi

            // return Mahasiswa::join('jurusan', 'jurusan.name', 'mahasiswa.id_jurusan')
            // ->where('jurusan.name, $request->jurusan_name')
            // // ->select('mahasiswa.name')
            // ->get(); //ini adalah join biasa 
        }

        public function find($id){
            return Mahasiswa::find($id);
        }

        public function create(Request $request){
            return Mahasiswa::create($request->all());
        }

        public function update(Request $request, $id){
            return Mahasiswa::where('id',$id)->update($request->all());
        }

        public function delete($id){
            return Mahasiswa::where('id',$id)->delete();
        }


}
