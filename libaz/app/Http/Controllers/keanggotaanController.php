<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use App\Models\Keanggotaan;

class KeanggotaanController extends Controller
{

    public function anggota()
    {
        return view('users.keanggotaan');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'username' => 'required|max:255|min:2|unique:keanggotaan,username',
            'email' => 'required|email|max:255|unique:keanggotaan,email',
            'password' => 'required|min:5|max:255',
            'status' => 'in:pending,terima,tolak'
        ]);

        $attributes['status'] = 'pending'; // Assuming 'pending' is a default value or it comes from the form

        $keanggotaan = Keanggotaan::create($attributes);

        return redirect('/');
    }
}