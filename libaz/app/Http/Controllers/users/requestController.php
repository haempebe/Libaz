<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class requestController extends Controller
{
    public function request() {
        return view('users.request');
    }
}
