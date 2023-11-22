<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class managementUsers extends Controller
{
    public function index() {
        $allUsers = User::get();
        return view('pages.management-user')->with('allUsers', $allUsers);
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->to('pages.management-user')->with('succes', 'The data has been successfully deleted', );
    }
}
