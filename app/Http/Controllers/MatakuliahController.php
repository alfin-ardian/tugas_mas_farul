<?php
namespace App\Http\Controllers;

use App\Matakuliah;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class MatakuliahController extends Controller{
        public function index(){
            return DB::table('alfin.mata_kuliah')->get();
        }

        public function find($id){
            return Matakuliah::find($id);
        }

        public function create(Request $request){
            return Matakuliah::create($request->all());
        }

        public function update(Request $request, $id){
            return Matakuliah::where('id',$id)->update($request->all());
        }

        public function delete($id){
            return Matakuliah::where('id',$id)->delete();
        }


}
