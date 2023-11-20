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
}
