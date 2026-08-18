<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\CaseStudy;

class AdminCaseStudyController extends Controller
{
    public function index()
    {
        $studies = CaseStudy::all();
        return view('admin.case-studies.index', compact('studies'));
    }

    public function create()
    {
        return view('admin.case-studies.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'metric' => 'required|string|max:255',
            'description' => 'required|string',
            'btn_text' => 'required|string|max:255',
            'btn_link' => 'required|string',
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:256000'
        ]);

        $videoPath = '';
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('videos'), $filename);
            $videoPath = 'videos/' . $filename;
        }

        CaseStudy::create([
            'id' => Str::uuid()->toString(),
            'title' => $request->title,
            'metric' => $request->metric,
            'description' => $request->description,
            'btn_text' => $request->btn_text,
            'btn_link' => $request->btn_link,
            'video' => $videoPath
        ]);

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study added successfully!');
    }

    public function edit($id)
    {
        $study = CaseStudy::findOrFail($id);
        return view('admin.case-studies.form', compact('study'));
    }

    public function update(Request $request, $id)
    {
        $study = CaseStudy::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'metric' => 'required|string|max:255',
            'description' => 'required|string',
            'btn_text' => 'required|string|max:255',
            'btn_link' => 'required|string',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:256000'
        ]);

        $videoPath = $study->video;
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('videos'), $filename);
            $videoPath = 'videos/' . $filename;
        }

        $study->update([
            'title' => $request->title,
            'metric' => $request->metric,
            'description' => $request->description,
            'btn_text' => $request->btn_text,
            'btn_link' => $request->btn_link,
            'video' => $videoPath
        ]);

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study updated successfully!');
    }

    public function destroy($id)
    {
        $study = CaseStudy::findOrFail($id);
        $study->delete();

        return redirect()->route('admin.case-studies.index')->with('success', 'Case study deleted successfully!');
    }
}
