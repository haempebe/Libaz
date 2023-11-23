<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keanggotaanController extends Controller
{
    public function anggota(){
        return view('users.keanggotaan');
    }
}
