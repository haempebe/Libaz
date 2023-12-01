<?php

namespace App\Http\Controllers;

use App\Models\rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    public function rak()
    {
        $allRak = rak::get();
        return view("pages.book.bookshelf")->with('allRak', $allRak);
    }
    public function store()
    {
        $attributes = request()->validate([
            'no' => 'required|unique:raks,no',
        ], [
            'no.required' => 'bookshelf no cannot be blank',
            'no.unique' => 'The bookshelf no has already been taken.'
        ]);
        rak::create($attributes);
        return redirect()->to('book/bookshelf')->with('succes', 'added data successfully');
    }
    public function destroy($id)
    {
        rak::where('id', $id)->delete();
        return redirect()->to('book/bookshelf')->with('succes', 'The data has been successfully deleted');
    }
}
