<?php

namespace App\Http\Controllers\users;

use App\Models\categoryBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibraryController extends Controller
{
    public function library() {
        $allFilter = categoryBook::get();
        $allCategory = categoryBook::orderBy('id', 'asc')->paginate(16);
        return view("users.library", ['allCategory' => $allCategory ,'allFilter' => $allFilter]);
    }
    public function detail(string $id) {
        $data = categoryBook::where('name', $id)->first();
        return view('users.detail')->with('data', $data);
    }
}
