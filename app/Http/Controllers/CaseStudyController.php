<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class CaseStudyController extends Controller
{
    public function index()
    {
        $setting = Setting::where('key', 'case_study_hero')->first();
        $hero = $setting && $setting->value ? $setting->value : [
            'badge' => 'FASHION',
            'heading' => 'Maison Noir',
            'description' => 'Building a Brand Designed to Be Remembered.',
            'image' => 'images/work-nova.jpg'
        ];

        $challengeSetting = Setting::where('key', 'case_study_challenge')->first();
        $challenge = $challengeSetting && $challengeSetting->value ? $challengeSetting->value : [
            'heading' => 'Turning a Market Challenge<br>Into an Opportunity.',
            'description' => 'Every ambitious brand faces a point where its existing presence no longer reflects its ambition. The challenge was to create a stronger position, connect with the right audience, and build momentum in a competitive market.',
            'image' => 'images/work-meridian.jpg',
            'points' => [
                ['title' => 'Existing Position', 'description' => "The existing brand presence wasn't communicating the level of quality or ambition behind the business."],
                ['title' => 'Market Competition', 'description' => 'A crowded market made it difficult to stand apart and capture meaningful attention.'],
                ['title' => 'Audience Connection', 'description' => 'The brand was reaching people, but not consistently turning attention into meaningful engagement.'],
                ['title' => 'Growth Challenge', 'description' => 'Without a clear strategic direction, growth remained inconsistent and difficult to scale.']
            ]
        ];

        $strategySetting = Setting::where('key', 'case_study_strategy')->first();
        $strategy = $strategySetting && $strategySetting->value ? $strategySetting->value : [
            'heading' => 'Bringing the Strategy to Life.',
            'description_1' => 'Once the strategy was defined, we translated the vision into a cohesive creative direction. Every visual element was carefully considered to establish a distinctive brand presence across social media, campaigns, photography, and video.',
            'description_2' => 'From the first concept to the final execution, each touchpoint was designed with purpose. We combined creative storytelling, consistent visual language, and platform-specific content to turn the strategy into an experience that captures attention and drives meaningful engagement.',
            'image' => 'images/work-nova.jpg'
        ];

        $workMotionSetting = Setting::where('key', 'case_study_work_motion')->first();
        $work_motion = $workMotionSetting && $workMotionSetting->value ? $workMotionSetting->value : [
            'heading' => 'The Work, In Motion.',
            'image_1' => 'images/left.jpg',
            'image_2' => 'images/e3daa32d63e4b525d4d953d43fca4bac8663a408.jpg',
            'image_3' => 'images/75380b79c3a2b132c49c08f7ba4bf3c2cef763d7.jpg',
            'image_4' => 'images/ce777daf76ee5541c189407447390a60a69f9148.jpg',
            'image_5' => 'images/6b43bbe1f1ef199886ab7fc8478b9fa2e9bec8c0.jpg',
            'image_6' => 'images/3e21a292ef2acb2f4638dacec719d43784164505.jpg'
        ];

        $videoSetting = Setting::where('key', 'case_study_video')->first();
        $video = $videoSetting && $videoSetting->value ? $videoSetting->value : [
            'thumbnail' => 'images/hero.jpg',
            'video_file' => ''
        ];

        $faqs = \App\Models\Faq::whereJsonContains('pages', 'case-study')->get();

        return view('case-study-page', compact('hero', 'challenge', 'strategy', 'work_motion', 'video', 'faqs'));
    }
}
