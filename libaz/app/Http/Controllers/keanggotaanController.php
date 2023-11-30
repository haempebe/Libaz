<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\keanggotaan;


class keanggotaanController extends Controller
{
    
    public function anggota()
    {
        return view('users.keanggotaan');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2|unique:keanggotaan,username',
            'email' => 'required|email|max:255|unique:keanggotaan,email',
            'password' => 'required|min:5|max:255'
        ]);
        $keanggotaan = keanggotaan::create($attributes);

        return redirect('/');
    }
}
