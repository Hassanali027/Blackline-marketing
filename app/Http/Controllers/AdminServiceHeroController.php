<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminServiceHeroController extends Controller
{
    private $settingsPath;

    public function __construct()
    {
        $this->settingsPath = storage_path('app/service_hero.json');
    }

    private function getSettings()
    {
        if (File::exists($this->settingsPath)) {
            return json_decode(File::get($this->settingsPath), true);
        }

        // Default settings
        return [
            'small_text' => 'SOCIAL MEDIA MANAGEMENT',
            'heading' => 'Your Brand Deserves More Than a Feed.',
            'btn_text' => 'Book a Discovery Call &nbsp; →',
            'btn_link' => '#contact',
            'image' => 'assets/pdf/asset-12.png'
        ];
    }

    public function edit()
    {
        $settings = $this->getSettings();
        return view('admin.service-hero', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'small_text' => 'required|string',
            'heading' => 'required|string',
            'btn_text' => 'required|string',
            'btn_link' => 'required|string',
            'image' => 'nullable|image|max:10000'
        ]);

        $settings = $this->getSettings();
        $settings['small_text'] = $request->small_text;
        $settings['heading'] = $request->heading;
        $settings['btn_text'] = $request->btn_text;
        $settings['btn_link'] = $request->btn_link;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/service'), $filename);
            $settings['image'] = 'images/service/' . $filename;
        }

        File::put($this->settingsPath, json_encode($settings, JSON_PRETTY_PRINT));

        return back()->with('success', 'Service hero section updated successfully!');
    }
}
