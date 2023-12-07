<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $nama = "Diva Ardelia";
        $matkul=["Alpro", "ASD", "RO", "PWEB"];
        return view('biodata', ['nama'=>$nama, 'matkul' =>$matkul]);
    }
}
