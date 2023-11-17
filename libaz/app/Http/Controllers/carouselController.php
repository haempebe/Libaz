<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class carouselController extends Controller
{
    public function crol() 
    {
        return view("pages.crousel");
    }
}
