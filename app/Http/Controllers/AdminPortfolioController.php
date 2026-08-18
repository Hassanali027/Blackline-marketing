<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class AdminPortfolioController extends Controller
{
    private function getSettings()
    {
        $setting = Setting::where('key', 'portfolio_hero')->first();
        if ($setting && $setting->value) {
            return $setting->value;
        }

        return [
            'badge' => 'CASE STUDIES',
            'heading' => 'Brands Worth Remembering.',
            'btn_text' => 'Book a Discovery Call',
            'btn_link' => '#portfolio-grid',
            'image' => 'assets/portfolio/hero.png'
        ];
    }

    public function edit()
    {
        $settings = $this->getSettings();
        return view('admin.portfolio-hero', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'badge' => 'required|string|max:255',
            'heading' => 'required|string',
            'btn_text' => 'required|string|max:255',
            'btn_link' => 'required|string|max:255',
            'image' => 'nullable|image|max:10000'
        ]);

        $settings = $this->getSettings();
        $settings['badge'] = $request->badge;
        $settings['heading'] = $request->heading;
        $settings['btn_text'] = $request->btn_text;
        $settings['btn_link'] = $request->btn_link;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images/portfolio'), $filename);
            $settings['image'] = 'images/portfolio/' . $filename;
        }

        Setting::updateOrCreate(['key' => 'portfolio_hero'], ['value' => $settings]);

        return back()->with('success', 'Portfolio Hero section updated successfully!');
    }
}
