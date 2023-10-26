<?php

namespace App\Http\Controllers;

use App\Models\categoryBook;
use Illuminate\Http\Request;

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
}
