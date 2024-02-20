<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public function penerbit()
    {
        $allPenerbit = Penerbit::get();
        return view("pages.book.publisher")->with('allPenerbit', $allPenerbit);
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:50|min:5|unique:penerbits,name',
        ], [
            'name.required' => 'penerbit name cannot be blank',
            'name.unique' => 'The penerbit name has already been taken.'
        ]);
        Penerbit::create($attributes);
        return redirect()->to('book/publisher')->with('succes', 'added data successfully');
    }
    public function destroy($id)
    {
        Penerbit::where('id', $id)->delete();
        return redirect()->to('book/publisher')->with('succes', 'The data has been successfully deleted');
    }
}
