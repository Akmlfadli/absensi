<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function check($jurusan, $kelas){
        $result = DB::table('siswa')->where('jurusan', $jurusan)->where('kelas', $kelas)->count();
        $data = DB::table("siswa")->where('jurusan', $jurusan)->where('kelas', $kelas);
        if($result > 0){
            return view('jurusan.index', ['data' => $data]);
        }
        else{
            return view('jurusan.index');
        }
    }
}
