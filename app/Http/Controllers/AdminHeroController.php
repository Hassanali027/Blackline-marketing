<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class AdminHeroController extends Controller
{
    private function getSettings()
    {
        $setting = Setting::where('key', 'home_hero')->first();
        if ($setting && $setting->value) {
            return $setting->value;
        }

        return [
            'heading' => 'Where Brands<br>Become Icons',
            'primary_word' => 'Icons',
            'description' => 'We build identity systems, campaigns, and digital experiences for labels ready to lead their category not blend into it.',
            'video' => 'videos/blackline-marketing-video.mp4'
        ];
    }

    public function edit()
    {
        $settings = $this->getSettings();
        return view('admin.home-hero', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required|string',
            'primary_word' => 'nullable|string',
            'description' => 'required|string',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:50000'
        ]);

        $settings = $this->getSettings();
        $settings['heading'] = $request->heading;
        $settings['primary_word'] = $request->primary_word;
        $settings['description'] = $request->description;

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('videos'), $filename);
            $settings['video'] = 'videos/' . $filename;
        }

        Setting::updateOrCreate(['key' => 'home_hero'], ['value' => $settings]);

        return back()->with('success', 'Hero section updated successfully!');
    }
}
