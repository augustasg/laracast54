<?php

namespace App\Http\Controllers;

use App\Post;
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
        return view('blogs.create');
    }

    public function store()
    {


        Post::query()->create([
            'title' => \request('title'),
            'body' => \request('body')
        ]);
        return redirect('/');
    }
}
