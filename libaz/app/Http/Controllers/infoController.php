<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penolakan;

class infoController extends Controller
{
    public function info()
    {
        $allinformasi = penolakan::get();
        return view('pages.tampil_info')->with('allinformasi', $allinformasi);
    }

    public function Show($id)
    {
        $allinformasi = penolakan::find($id);
        return view('pages.tampil_info', ['allinformasi' => $allinformasi]);
    }



}