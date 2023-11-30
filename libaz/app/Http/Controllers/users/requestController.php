<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Request_book;
use Illuminate\Http\Request;

class requestController extends Controller
{
    public function request()
    {
        $allrequest = User::get();
        return view('users.request')->with('allrequest', $allrequest);
    }
    
    public function createBook(Request $request)
    {
        $allrequest = $request->validate([

            'name' => ['required', 'name'],
            'namaBuku' => ['required', 'name'],
            'DeskripsiBuku' => ['required'],
            'alasan' => ['required'],

        ]);
        Request_book::create([
            'title' => $request->name,
            'author' => $request->namaBuku,
            'DeskripsiBuku' => $request->namaBuku,
            'alasan' => $request->namaBuku,

        ]);
        Request_book::create($allrequest);
        return redirect()->to('createBook')->with('succes', 'added data successfully');

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ]);
    }
}
