<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\PortfolioItem;

class AdminPortfolioItemController extends Controller
{
    public function index()
    {
        $items = PortfolioItem::all();
        return view('admin.portfolio.index', compact('items'));
    }

    public function create()
    {
        return view('admin.portfolio.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|max:10000',
            'btn_text' => 'required|string|max:255',
            'btn_link' => 'nullable|string|max:255',
            'industry' => 'required|string|max:255'
        ]);

        $imagePath = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images/portfolio'), $filename);
            $imagePath = 'images/portfolio/' . $filename;
        }

        PortfolioItem::create([
            'id' => Str::uuid()->toString(),
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'btn_text' => $request->btn_text,
            'btn_link' => $request->btn_link ?? '#',
            'industry' => strtolower($request->industry)
        ]);

        return redirect()->route('admin.portfolio.items.index')->with('success', 'Portfolio item created successfully!');
    }

    public function edit($id)
    {
        $item = PortfolioItem::findOrFail($id);
        return view('admin.portfolio.form', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = PortfolioItem::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:10000',
            'btn_text' => 'required|string|max:255',
            'btn_link' => 'nullable|string|max:255',
            'industry' => 'required|string|max:255'
        ]);

        $imagePath = $item->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images/portfolio'), $filename);
            $imagePath = 'images/portfolio/' . $filename;
        }

        $item->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'btn_text' => $request->btn_text,
            'btn_link' => $request->btn_link ?? '#',
            'industry' => strtolower($request->industry)
        ]);

        return redirect()->route('admin.portfolio.items.index')->with('success', 'Portfolio item updated successfully!');
    }

    public function destroy($id)
    {
        $item = PortfolioItem::findOrFail($id);
        $item->delete();

        return redirect()->route('admin.portfolio.items.index')->with('success', 'Portfolio item deleted successfully!');
    }
}
