<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class AdminSeoController extends Controller
{
    private $pages = [
        'home' => 'Home Page',
        'services' => 'Services Listing',
        'portfolio' => 'Portfolio Listing',
        'case_studies' => 'Case Studies Listing',
        'faqs' => 'FAQs Page',
        'blogs' => 'Blogs Listing',
        'contact' => 'Contact Us',
        'book_now' => 'Book Now'
    ];

    public function edit(Request $request)
    {
        $selectedPage = $request->query('page', 'home');
        if (!array_key_exists($selectedPage, $this->pages)) {
            $selectedPage = 'home';
        }

        $settingKey = 'seo_' . $selectedPage;
        $setting = Setting::where('key', $settingKey)->first();
        $seoSettings = $setting ? $setting->value : ['meta_title' => '', 'meta_description' => '', 'meta_keywords' => ''];

        $pages = $this->pages;

        return view('admin.seo-settings', compact('seoSettings', 'selectedPage', 'pages'));
    }

    public function update(Request $request)
    {
        $selectedPage = $request->input('page', 'home');
        if (!array_key_exists($selectedPage, $this->pages)) {
            return back()->withErrors('Invalid page selected.');
        }

        $request->validate([
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string'
        ]);

        $settingKey = 'seo_' . $selectedPage;
        
        Setting::updateOrCreate(
            ['key' => $settingKey],
            ['value' => [
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords
            ]]
        );

        return redirect()->route('admin.seo-settings', ['page' => $selectedPage])->with('success', 'SEO settings updated for ' . $this->pages[$selectedPage]);
    }
}
