<?php

namespace App\Http\Controllers\users;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class requestController extends Controller
{
    public function request() {
        $allBuku = Buku::orderBy('id', 'asc')->paginate(8);
        return view("users.request", ['allBuku' => $allBuku]);
    }
}
