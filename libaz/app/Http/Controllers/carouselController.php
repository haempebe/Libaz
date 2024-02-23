<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Carousel;

class CarouselController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input gambar
        $validator = Validator::make($request->all(), [
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Jika validasi gagal, kembalikan dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Jika terdapat file gambar yang diunggah
        if ($request->hasFile('gambar')) {
            // Ambil file gambar dari request
            $gambar = $request->file('gambar');
            // Buat nama file baru dengan timestamp untuk menghindari duplikasi nama
            $nama_file = time() . '_' . $gambar->getClientOriginalName();
            // Pindahkan file gambar ke direktori 'uploads' di dalam folder 'public'
            $gambar->move(public_path('uploads'), $nama_file);

            // Simpan informasi gambar ke database jika diperlukan
            // Misalnya, jika Anda memiliki model Carousel
            Carousel::create(['nama_file' => $nama_file]);

            // Simpan nama file ke dalam session
            session()->put('nama_file', $nama_file);

            // Redirect kembali dengan pesan sukses
            return redirect()->back()->with('success', 'Gambar berhasil diupload.');
        }
    }

    public function destroy(Request $request)
    {
        $nama_file = $request->input('nama_file');

        // Lakukan penanganan penghapusan gambar di sini
        // Misalnya, jika Anda memiliki model Carousel
        Carousel::where('nama_file', $nama_file)->delete();

        // Kemudian, hapus file gambar dari direktori uploads
        // Jangan lupa untuk menambahkan penanganan kesalahan jika gagal menghapus file

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Gambar berhasil dihapus.');
    }
}
