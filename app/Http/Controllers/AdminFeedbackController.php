<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Feedback;

class AdminFeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    public function create()
    {
        return view('admin.feedbacks.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5000',
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:50000'
        ]);

        $logoPath = '';
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $logoPath = 'images/' . $filename;
        }

        $videoPath = '';
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('videos'), $filename);
            $videoPath = 'videos/' . $filename;
        }

        Feedback::create([
            'id' => Str::uuid()->toString(),
            'name' => $request->name,
            'role' => $request->role,
            'description' => $request->description,
            'logo' => $logoPath,
            'video' => $videoPath
        ]);

        return redirect()->route('admin.feedbacks.index')->with('success', 'Feedback added successfully!');
    }

    public function edit($id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('admin.feedbacks.form', compact('feedback'));
    }

    public function update(Request $request, $id)
    {
        $feedback = Feedback::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5000',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:50000'
        ]);

        $logoPath = $feedback->logo;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $logoPath = 'images/' . $filename;
        }

        $videoPath = $feedback->video;
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('videos'), $filename);
            $videoPath = 'videos/' . $filename;
        }

        $feedback->update([
            'name' => $request->name,
            'role' => $request->role,
            'description' => $request->description,
            'logo' => $logoPath,
            'video' => $videoPath
        ]);

        return redirect()->route('admin.feedbacks.index')->with('success', 'Feedback updated successfully!');
    }

    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();

        return redirect()->route('admin.feedbacks.index')->with('success', 'Feedback deleted successfully!');
    }
}
