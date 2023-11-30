<?php

namespace App\Http\Controllers;

use App\Models\keanggotaan;
use App\Models\penolakan;
use App\Models\User;
use Illuminate\Http\Request;

class managementUsers extends Controller
{
    public function index()
    {
        $allAnggota = keanggotaan::get();
        $allUsers = User::get();
        return view('pages.management-user')->with(['allAnggota'=> $allAnggota,'allUsers' => $allUsers]);
    }

    public function destroy($id)
    {
        $allAnggota = keanggotaan::findOrFail($id);
        $allAnggota->delete();
        return redirect()->route('management')->with('succes', 'The data has been successfully deleted',);
    }

    public function delete($id)
    {
        $allUsers = user::findOrFail($id);
        $allUsers->delete();
        return redirect()->route('management')->with('succes', 'The data has been successfully deleted',);
    }


    // public function show($id)
    public function show(Request $request, $id)
    {
        $allUsers = keanggotaan::findOrFail($id);
        // dd($allUsers->email);
        return view('pages.tampil_tolak')->with('allUsers', $allUsers);
        // $allUsers->penolakan = $request->input('penolakan');
        // $allUsers->status = 'Ditolak';
        // $allUsers->save();

        return redirect()->route('pages.tampil_terima')->with('succes', 'Pengajuan telah ditolak.');
    }

    public function penolakan()
    {
        $data = request()->validate(
            [
                'penolakan' =>'required'
            ]
        );
        penolakan::create($data);
        return redirect()->to('/tampil_info')->with('succes','alasan berhasil di tambahkan');
    }

    public function view($id)
    {
        $allUsers = keanggotaan::findOrFail($id);
        // dd($allUsers->email);
        return view('pages.tampil_terima')->with('allUsers', $allUsers);
    }
}
