<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('author')->latest()->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('admin.blogs.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'content' => 'required',
            'author_id' => 'nullable|exists:authors,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = Str::slug($request->title);
        $count = Blog::where('slug', 'LIKE', "{$slug}%")->count();
        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
            $imagePath = 'uploads/blogs/' . $filename;
        }

        Blog::create([
            'title' => $request->title,
            'slug' => $slug,
            'category' => $request->category,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'image' => $imagePath,
            'author_id' => $request->author_id,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully.');
    }

    public function edit(Blog $blog)
    {
        $authors = Author::all();
        return view('admin.blogs.edit', compact('blog', 'authors'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'content' => 'required',
            'author_id' => 'nullable|exists:authors,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $slug = Str::slug($request->title);
        if ($blog->slug !== $slug) {
            $count = Blog::where('slug', 'LIKE', "{$slug}%")->where('id', '!=', $blog->id)->count();
            if ($count > 0) {
                $slug = $slug . '-' . ($count + 1);
            }
        } else {
            $slug = $blog->slug;
        }

        $imagePath = $blog->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/blogs'), $filename);
            $imagePath = 'uploads/blogs/' . $filename;
        }

        $blog->update([
            'title' => $request->title,
            'slug' => $slug,
            'category' => $request->category,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'image' => $imagePath,
            'author_id' => $request->author_id,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog post deleted successfully.');
    }
}
