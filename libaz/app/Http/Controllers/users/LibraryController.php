<?php

namespace App\Http\Controllers\users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function library() {
        return view('users.library');
    }
}
