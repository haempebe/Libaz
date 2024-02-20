<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function penulis()
    {
        $allPenulis = Penulis::get();
        return view("pages.book.writer")->with('allPenulis', $allPenulis);
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:50|min:5|unique:penulis,name',
        ], [
            'name.required' => 'writer name cannot be blank',
            'name.unique' => 'The writer name has already been taken.'
        ]);
        Penulis::create($attributes);
        return redirect()->to('book/writer')->with('succes', 'added data successfully');
    }
    public function destroy($id)
    {
        Penulis::where('id', $id)->delete();
        return redirect()->to('book/writer')->with('succes', 'The data has been successfully deleted');
    }
}
