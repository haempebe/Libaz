<?php

namespace App\Http\Controllers;

use App\Models\categoryBook;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class CategoryController extends Controller
{
    //
    public function category()
    {
        $allCategory = categoryBook::get();
        return view("pages.category")->with('allCategory', $allCategory);
    }
    public function store() {
        $attributes = request()->validate([
            'name' => 'required|max:255|min:2|unique:category_book,name',
        ],[
            'name.required' => 'category name cannot be blank',
            'name.unique' => 'The category name has already been taken.'
        ]);
        categoryBook::create($attributes);
        return redirect()->to('category')->with('succes', 'added data successfully');
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

        DB::table('category_book')
        ->where('id',$id)
        ->update(
            ['nama' => $request->nama],
            ['deskripsi' => $request->deskripsi]
        );
        return redirect('/kategori');
    }
}
