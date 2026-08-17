<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Blog::select('category')->distinct()->pluck('category')->toArray();
        $blogs = \App\Models\Blog::latest()->get();

        return view('blog', compact('categories', 'blogs'));
    }

    public function show($slug)
    {
        $blog = \App\Models\Blog::where('slug', $slug)->firstOrFail();
        return view('blog-post', compact('blog'));
    }
}
