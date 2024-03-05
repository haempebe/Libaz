<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Carousel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $totalUsers = User::count();
        return view('pages.dashboard')->with('totalUsers', $totalUsers);

        $gambar = Carousel::latest()->first();

        return view('home', compact('gambar'));
    }
}
