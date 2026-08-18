<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\PortfolioItem;

class PortfolioController extends Controller
{
    public function index()
    {
        $setting = Setting::where('key', 'portfolio_hero')->first();
        if ($setting && $setting->value) {
            $heroSettings = $setting->value;
        } else {
            $heroSettings = [
                'badge' => 'CASE STUDIES',
                'heading' => 'Brands Worth Remembering.',
                'btn_text' => 'Book a Discovery Call',
                'btn_link' => '#portfolio-grid',
                'image' => 'assets/portfolio/hero.png'
            ];
        }

        $projects = PortfolioItem::all();
        // Dynamically get unique industries from portfolio items
        $industries = PortfolioItem::select('industry')->distinct()->pluck('industry')->toArray();

        $faqs = \App\Models\Faq::whereJsonContains('pages', 'portfolio')->get();

        $seoSetting = Setting::where('key', 'seo_portfolio')->first();
        $seo = $seoSetting ? $seoSetting->value : null;

        return view('portfolio', compact('heroSettings', 'projects', 'industries', 'faqs', 'seo'));
    }
}
