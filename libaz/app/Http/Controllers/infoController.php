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

    public function update(Request $request, $id)
    {
        $user = penolakan::findOrFail($id);
        $user->informasi_penerimaan = $request->input('informasi_penerimaan');
        $user->save();

        return redirect()->back()->with('success', 'Informasi penerimaan berhasil disimpan!');
    }



}