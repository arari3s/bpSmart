<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.frontend.index');
    }

    public function profile()
    {
        return view('pages.frontend.profile');
    }

    public function blog()
    {
        return view('pages.frontend.blog');
    }

    public function contact()
    {
        return view('pages.frontend.contact');
    }

    public function ppdb()
    {
        return view('pages.frontend.ppdb');
    }
}
