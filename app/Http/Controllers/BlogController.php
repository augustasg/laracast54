<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }

    public function show()
    {
        return view('blogs.show');
    }

    public function create()
    {
        //dd(this);
        return view('blogs.create');
    }
}
