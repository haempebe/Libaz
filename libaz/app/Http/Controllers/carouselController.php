<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Image;

class carouselController extends Controller
{
    public function create() 
    {
        return view('pages.crousel');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = new image;
        $image->title = $request->title;

        // Upload gambar
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Simpan informasi gambar ke database
        $image->image_path = 'images/'.$imageName;
        $image->save();

        return redirect()->route('image.create')
                        ->with('success','Gambar berhasil diupload.');
    }
}
