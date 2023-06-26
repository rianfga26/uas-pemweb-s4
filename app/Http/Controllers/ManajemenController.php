<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenController extends Controller
{
    public function viewAnggota(){
        return view('admin.anggota');
    }

    public function viewUploadGambar(){
        return view('admin.uploadGambar');
    }
}
