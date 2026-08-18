<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\CaseStudy;
use App\Models\Feedback;

class HomeController extends Controller
{
    public function index()
    {
        $setting = Setting::where('key', 'home_hero')->first();
        if ($setting && $setting->value) {
            $heroSettings = $setting->value;
        } else {
            $heroSettings = [
                'heading' => 'Where Brands<br>Become Icons',
                'primary_word' => 'Icons',
                'description' => 'We build identity systems, campaigns, and digital experiences for labels ready to lead their category not blend into it.',
                'video' => 'videos/blackline-marketing-video.mp4'
            ];
        }

        $caseStudies = CaseStudy::all();
        $feedbacks = Feedback::all();

        $seoSetting = Setting::where('key', 'seo_home')->first();
        $seo = $seoSetting ? $seoSetting->value : null;

        return view('Home', compact('heroSettings', 'caseStudies', 'feedbacks', 'seo'));
    }

    public function contact()
    {
        $seoSetting = Setting::where('key', 'seo_contact')->first();
        $seo = $seoSetting ? $seoSetting->value : null;

        return view('contact', compact('seo'));
    }
}
