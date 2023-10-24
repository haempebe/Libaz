<?php

namespace App\Http\Controllers;

use App\Models\categoryBook;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function category()
    {
        $allcategory = category::class;
        return view('pages.category')->with('allcategory', $allcategory);
    }
    public function store() {
        $attributes = request()->validate([
            'name' => 'required|max:255|min:2|unique:category,name',
        ]);
        $user = categoryBook::create($attributes);
        auth()->login($user);

        return redirect('/register');
    }
}
