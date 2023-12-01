<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;


class Kategoricontroller extends Controller
{
    public function kategori()
    {
       $allCategory = Kategori::get();

       return view('pages.book.category', ['allCategory' => $allCategory]);
   }

    public function create()
    {
        return view('pages.book.category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);
        DB::table('kategori')->insert([
            'nama' => $request['nama'],
            'deskripsi' => $request['deskripsi']
        ]);
        return redirect('/kategori');
    }

    public function show($id)
     {
      $kategori = DB::table('kategori')->where('id', $id)->first();
      return view('kategori.detail', ['kategori' => $kategori]);
    }
    public function edit($id)
    {
        $kategori = DB::table('kategori')->where('id', $id)->first();
      return view('kategori.edit', ['kategori' => $kategori]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        DB::table('kategori')
        ->where('id',$id)
        ->update(
            ['nama' => $request->nama],
            ['deskripsi' => $request->deskripsi]
        );
        return redirect('/kategori');
    }
}
