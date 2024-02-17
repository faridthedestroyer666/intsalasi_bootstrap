<?php

namespace App\http\Controllers;

use Illuminate\http\Request;

class UserController extends Controller {
    public function index(){
        $nama ="Kelompok B3";
        $pelajaran=["Algoritma & Pemprogaman","Kalkulus","Pemprogaman web"];
        return view('home',compact('nama','pelajaran'));
    }
}


