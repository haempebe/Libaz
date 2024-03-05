<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Keanggotaan;
use App\Models\Penolakan;
use App\Models\User;

class ManagementUsers extends Controller
{
    public function index()
    {
        $allAnggota = Keanggotaan::get();
        return view('pages.management-user')->with(['allAnggota' => $allAnggota,]);
    }

    public function destroy($id)
    {
        $allAnggota = Keanggotaan::findOrFail($id);
        $allAnggota->delete();
        return redirect()->route('management')->with('success', 'The data has been successfully deleted');
    }

    public function delete($id)
    {
        $allUsers = User::findOrFail($id);
        $allUsers->delete();
        return redirect()->route('management')->with('success', 'The data has been successfully deleted');
    }

    public function view($id)
    {
        $allUsers = Keanggotaan::findOrFail($id);
        return view('pages.tampil_terima')->with('allUsers', $allUsers);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->informasi_penerimaan = $request->input('informasi_penerimaan');
        $user->save();

        return redirect()->back()->with('success', 'Informasi penerimaan berhasil disimpan!');
    }

    public function updateStatus(Request $request, $id)
    {
        $allAnggota = Keanggotaan::findOrFail($id);
        $status = $request->input('status');

        if ($status === 'Diterima' || $status === 'Ditolak') {
            $allAnggota->status = ucfirst($status);
            $allAnggota->save();
            return redirect()->route('management')->with('success', 'Status anggota berhasil diperbarui');
        } else {
            return redirect()->route('management')->with('error', 'Status tidak valid');
        }
    }

}
