<?php

namespace App\Http\Controllers\users;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function home() {
        $allBuku = Buku::orderBy('id', 'asc')->paginate(4);
        return view("users.home", ['allBuku' => $allBuku]);
    }
}
