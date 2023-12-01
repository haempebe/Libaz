<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function kategori()
    {
        $allCategory = Kategori::get();
        return view("pages.book.category")->with('allCategory', $allCategory);
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:50|min:5|unique:kategoris,name',
        ], [
            'name.required' => 'category name cannot be blank',
            'name.unique' => 'The category name has already been taken.'
        ]);
        Kategori::create($attributes);
        return redirect()->to('book/category')->with('succes', 'added data successfully');
    }
    public function destroy($id)
    {
        Kategori::where('id', $id)->delete();
        return redirect()->to('book/category')->with('succes', 'The data has been successfully deleted');
    }
}
