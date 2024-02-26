<?php

namespace App\Http\Controllers;

use File;
use App\Models\rak;
use App\Models\Buku;
use App\Models\item;
use App\Models\Penulis;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;
use Mockery\Generator\Method;

class BukuController extends Controller
{
    public function buku()
    {
        $allBuku = Buku::get();
        return view('pages.book.book', compact('allBuku'));
    }

    public function create()
    {
        $kategori = Kategori::get();
        $rak = rak::get();
        $penulis = Penulis::get();
        $penerbit = Penerbit::get();
        return view('pages.book.perform.createBook', compact('kategori', 'rak', 'penulis', 'penerbit'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'          => 'required',
            'tahun_terbit'  => 'required',
            'jumlah'        => 'required',
            'cover'         => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'deskripsi'     => 'required',
            'penulis_id'    => 'required',
            'penerbit_id'   => 'required',
            'kategori_id'   => 'required',
            'rak_id'        => 'required'

        ]);


        $coverName = time() . '.' . $request->cover->extension();

        $request->cover->move(public_path('img/cover'), $coverName);

        $book = new Buku;


        $book->name         = $request->name;
        $book->tahun_terbit = $request->tahun_terbit;
        $book->cover        = $coverName;
        $book->deskripsi    = $request->deskripsi;
        $book->penulis_id   = $request->penulis_id;
        $book->penerbit_id  = $request->penerbit_id;
        $book->kategori_id  = $request->kategori_id;
        $book->rak_id       = $request->rak_id;

        $book->save();

        $database = item::orderBy('kode', 'desc')->first();
        if (is_null($database)) {
            $string = "0";
        } else {
            $string = $database->kode;
        }
        $num = preg_replace("/[^0-9]/", "", $string);
        $index = (int)$num + 1;
        $margin = $request->jumlah + $index;

        for ($i = $index; $i < $margin; $i++) {
            $item = new item;
            $item->kode = "BS0" . $i;
            $item->buku_id = $book->id;
            $item->save();
        }

        return redirect('/book')->with('succes', 'added data successfully');
    }

    public function edit($id)
    {
        $copies = item::where('buku_id', $id)->count();
        $items = item::where('buku_id', $id)->get();
        $kategori = Kategori::get();
        $rak = rak::get();
        $penulis = Penulis::get();
        $penerbit = Penerbit::get();
        $buku     = Buku::findOrFail($id);
        return view('pages.book.perform.editBook', compact('buku', 'kategori', 'rak', 'penulis', 'penerbit', 'copies', 'items'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required',
            'tahun_terbit'  => 'required',
            'cover'         => 'image|mimes:jpg,png,jpeg|max:2048',
            'deskripsi'     => 'required',
            'penulis_id'    => 'required',
            'penerbit_id'   => 'required',
            'kategori_id'   => 'required',
            'rak_id'        => 'required'
        ]);

        if ($request->has('cover')) {
            $buku = Buku::find($id);
            $path = "img/cover/";
            File::delete($path . $buku->cover);

            $coverName = time() . '.' . $request->cover->extension();

            $request->cover->move(public_path('img/cover'), $coverName);

            $buku->name         = $request->name;
            $buku->tahun_terbit = $request->tahun_terbit;
            $buku->cover        = $coverName;
            $buku->deskripsi    = $request->deskripsi;
            $buku->penulis_id   = $request->penulis_id;
            $buku->penerbit_id  = $request->penerbit_id;
            $buku->kategori_id  = $request->kategori_id;
            $buku->rak_id       = $request->rak_id;

            $buku->save();

            return redirect('/book');
        } else {
            $buku = Buku::find($id);

            $buku->name         = $request->name;
            $buku->tahun_terbit = $request->tahun_terbit;
            $buku->deskripsi    = $request->deskripsi;
            $buku->penulis_id   = $request->penulis_id;
            $buku->penerbit_id  = $request->penerbit_id;
            $buku->kategori_id  = $request->kategori_id;
            $buku->rak_id       = $request->rak_id;

            $buku->save();


            return redirect('/book');
        }
    }


    public function destroy($id)
    {
        $buku = Buku::find($id);

        $path = "img/cover/";
        File::delete($path . $buku->cover);
        $buku->delete();

        return redirect('/book')->with('succes', 'success, data deleted');
    }
    public function item()
    {
        $allBuku = Buku::get();
        $allItem = item::get();
        return view('pages.item.item', compact('allBuku', 'allItem'));
    }
    public function itemStore(Request $request)
    {
        $request->validate([
            'Kode'     => 'required',
            'buku_id'  => 'required',
        ]);

        $book = Buku::get();
        $index = item::count();
        $margin = $book->jumlah + $index;
        for ($i = $index; $i < $margin; $i++) {
            $item = new item;
            $item->kode = "BS0" . $i;
            $item->buku_id = $book->id;
            $item->save();
        }
        return redirect('/book')->with('succes', 'added data successfully');
    }
    public function itemDestroy($id)
    {
        item::where('id', $id)->delete();
        return redirect()->back()->with('succes', 'success, item deleted');
    }
}
