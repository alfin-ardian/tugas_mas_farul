<?php
namespace App\Http\Controllers;

use App\Jurusan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class JurusanController extends Controller{
        public function index(){
            return DB::table('alfin.jurusan')->get();
        }

        public function find($id){
            return Jurusan::find($id);
        }

        public function create(Request $request){
            return Jurusan::create($request->all());
        }

        public function update(Request $request, $id){
            return Jurusan::where('id',$id)->update($request->all());
        }

        public function delete($id){
            return Jurusan::where('id',$id)->delete();
        }


}
