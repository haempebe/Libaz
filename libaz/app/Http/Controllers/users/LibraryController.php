<?php

namespace App\Http\Controllers\users;

use App\Models\rak;
use App\Models\Buku;
use App\Models\Penulis;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LibraryController extends Controller
{
    public function library() {
        $allKategori = Kategori::get();
        $rak = rak::get();
        $penulis = Penulis::get();
        $penerbit = Penerbit::get();
        $allBuku = Buku::orderBy('id', 'asc')->paginate(16);
        return view("users.library", ['allKategori' => $allKategori ,'allBuku' => $allBuku]);
    }
    public function detail(string $id) {
        $data = Buku::where('name', $id)->first();
        return view('users.detail')->with('data', $data);
    }
}
