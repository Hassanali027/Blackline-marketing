<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminServiceOverviewController extends Controller
{
    private $settingsPath;

    public function __construct()
    {
        $this->settingsPath = storage_path('app/service_overview.json');
    }

    private function getSettings()
    {
        if (File::exists($this->settingsPath)) {
            return json_decode(File::get($this->settingsPath), true);
        }

        // Default settings matching current design
        return [
            'label' => 'OVERVIEW',
            'description' => "At Black Line Marketing, we turn social media into a powerful extension of your brand. We build strategic, visually compelling social experiences designed to capture attention, build meaningful connections, and drive growth.\n\nFrom content planning and creative production to publishing and community management, we handle every part of your social presence with purpose - ensuring your brand stays consistent, relevant, and impossible to ignore.",
            'sub_heading' => 'Our Social Media Expertise:',
            'bullets' => "Strategic Content Planning\nCreative Content & Storytelling\nCommunity Engagement & Management\nPerformance Tracking & Optimization",
            'image' => 'assets/pdf/asset-08.png'
        ];
    }

    public function edit()
    {
        $settings = $this->getSettings();
        return view('admin.service-overview', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'label' => 'required|string',
            'description' => 'required|string',
            'sub_heading' => 'required|string',
            'bullets' => 'required|string',
            'image' => 'nullable|image|max:10000'
        ]);

        $settings = $this->getSettings();
        $settings['label'] = $request->label;
        $settings['description'] = $request->description;
        $settings['sub_heading'] = $request->sub_heading;
        $settings['bullets'] = $request->bullets;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images/service'), $filename);
            $settings['image'] = 'images/service/' . $filename;
        }

        File::put($this->settingsPath, json_encode($settings, JSON_PRETTY_PRINT));

        return back()->with('success', 'Service Overview section updated successfully!');
    }
}
