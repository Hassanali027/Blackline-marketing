<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class AdminCaseStudyPageController extends Controller
{
    private function getHeroSettings()
    {
        $setting = Setting::where('key', 'case_study_hero')->first();
        if ($setting && $setting->value) {
            return $setting->value;
        }

        return [
            'badge' => 'FASHION',
            'heading' => 'Maison Noir',
            'description' => 'Building a Brand Designed to Be Remembered.',
            'image' => 'images/work-nova.jpg'
        ];
    }

    private function getChallengeSettings()
    {
        $setting = Setting::where('key', 'case_study_challenge')->first();
        if ($setting && $setting->value) {
            return $setting->value;
        }

        return [
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
    }

    private function getStrategySettings()
    {
        $setting = Setting::where('key', 'case_study_strategy')->first();
        if ($setting && $setting->value) {
            return $setting->value;
        }

        return [
            'heading' => 'Bringing the Strategy to Life.',
            'description_1' => 'Once the strategy was defined, we translated the vision into a cohesive creative direction. Every visual element was carefully considered to establish a distinctive brand presence across social media, campaigns, photography, and video.',
            'description_2' => 'From the first concept to the final execution, each touchpoint was designed with purpose. We combined creative storytelling, consistent visual language, and platform-specific content to turn the strategy into an experience that captures attention and drives meaningful engagement.',
            'image' => 'images/work-nova.jpg'
        ];
    }

    private function getWorkMotionSettings()
    {
        $setting = Setting::where('key', 'case_study_work_motion')->first();
        if ($setting && $setting->value) {
            return $setting->value;
        }

        return [
            'heading' => 'The Work, In Motion.',
            'image_1' => 'images/left.jpg',
            'image_1_text' => 'HERMES',
            'image_2' => 'images/e3daa32d63e4b525d4d953d43fca4bac8663a408.jpg',
            'image_3' => 'images/75380b79c3a2b132c49c08f7ba4bf3c2cef763d7.jpg',
            'image_4' => 'images/ce777daf76ee5541c189407447390a60a69f9148.jpg',
            'image_5' => 'images/6b43bbe1f1ef199886ab7fc8478b9fa2e9bec8c0.jpg',
            'image_6' => 'images/3e21a292ef2acb2f4638dacec719d43784164505.jpg'
        ];
    }

    private function getVideoSettings()
    {
        $setting = Setting::where('key', 'case_study_video')->first();
        if ($setting && $setting->value) {
            return $setting->value;
        }

        return [
            'thumbnail' => 'images/hero.jpg',
            'video_file' => ''
        ];
    }

    public function edit()
    {
        $hero = $this->getHeroSettings();
        $challenge = $this->getChallengeSettings();
        $strategy = $this->getStrategySettings();
        $work_motion = $this->getWorkMotionSettings();
        $video = $this->getVideoSettings();
        return view('admin.case-study-page', compact('hero', 'challenge', 'strategy', 'work_motion', 'video'));
    }

    public function update(Request $request)
    {
        $request->validate([
            // Hero Validation
            'hero_badge' => 'required|string|max:255',
            'hero_heading' => 'required|string|max:255',
            'hero_description' => 'required|string',
            'hero_image' => 'nullable|image|max:10000',
            // Challenge Validation
            'challenge_heading' => 'required|string',
            'challenge_description' => 'required|string',
            'challenge_image' => 'nullable|image|max:10000',
            'challenge_points' => 'required|array',
            'challenge_points.*.title' => 'required|string|max:255',
            'challenge_points.*.description' => 'required|string',
            // Strategy Validation
            'strategy_heading' => 'required|string|max:255',
            'strategy_description_1' => 'required|string',
            'strategy_description_2' => 'required|string',
            'strategy_image' => 'nullable|image|max:10000',
            // Work Motion Validation
            'work_motion_heading' => 'required|string|max:255',
            'work_motion_image_1' => 'nullable|image|max:10000',
            'work_motion_image_2' => 'nullable|image|max:10000',
            'work_motion_image_3' => 'nullable|image|max:10000',
            'work_motion_image_4' => 'nullable|image|max:10000',
            'work_motion_image_5' => 'nullable|image|max:10000',
            'work_motion_image_6' => 'nullable|image|max:10000',
            // Video Validation
            'video_thumbnail' => 'nullable|image|max:10000',
            'video_file' => 'nullable|mimes:mp4,mov,ogg,qt,webm|max:100000'
        ]);

        // Save Hero
        $hero = $this->getHeroSettings();
        $hero['badge'] = $request->hero_badge;
        $hero['heading'] = $request->hero_heading;
        $hero['description'] = $request->hero_description;

        if ($request->hasFile('hero_image')) {
            $file = $request->file('hero_image');
            $filename = time() . '_hero_' . $file->getClientOriginalName();
            $file->move(public_path('images/case-study'), $filename);
            $hero['image'] = 'images/case-study/' . $filename;
        }
        Setting::updateOrCreate(['key' => 'case_study_hero'], ['value' => $hero]);

        // Save Challenge
        $challenge = $this->getChallengeSettings();
        $challenge['heading'] = $request->challenge_heading;
        $challenge['description'] = $request->challenge_description;
        
        $points = [];
        foreach ($request->challenge_points as $point) {
            $points[] = [
                'title' => $point['title'],
                'description' => $point['description']
            ];
        }
        $challenge['points'] = $points;

        if ($request->hasFile('challenge_image')) {
            $file = $request->file('challenge_image');
            $filename = time() . '_challenge_' . $file->getClientOriginalName();
            $file->move(public_path('images/case-study'), $filename);
            $challenge['image'] = 'images/case-study/' . $filename;
        }
        Setting::updateOrCreate(['key' => 'case_study_challenge'], ['value' => $challenge]);

        // Save Strategy
        $strategy = $this->getStrategySettings();
        $strategy['heading'] = $request->strategy_heading;
        $strategy['description_1'] = $request->strategy_description_1;
        $strategy['description_2'] = $request->strategy_description_2;

        if ($request->hasFile('strategy_image')) {
            $file = $request->file('strategy_image');
            $filename = time() . '_strategy_' . $file->getClientOriginalName();
            $file->move(public_path('images/case-study'), $filename);
            $strategy['image'] = 'images/case-study/' . $filename;
        }
        Setting::updateOrCreate(['key' => 'case_study_strategy'], ['value' => $strategy]);

        // Save Work Motion
        $work_motion = $this->getWorkMotionSettings();
        $work_motion['heading'] = $request->work_motion_heading;
        
        for ($i = 1; $i <= 6; $i++) {
            $inputName = 'work_motion_image_' . $i;
            if ($request->hasFile($inputName)) {
                $file = $request->file($inputName);
                $filename = time() . '_work_motion_' . $i . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/case-study'), $filename);
                $work_motion['image_' . $i] = 'images/case-study/' . $filename;
            }
        }
        Setting::updateOrCreate(['key' => 'case_study_work_motion'], ['value' => $work_motion]);

        // Save Video
        $video = $this->getVideoSettings();
        if ($request->hasFile('video_thumbnail')) {
            $file = $request->file('video_thumbnail');
            $filename = time() . '_video_thumb_' . $file->getClientOriginalName();
            $file->move(public_path('images/case-study'), $filename);
            $video['thumbnail'] = 'images/case-study/' . $filename;
        }

        if ($request->hasFile('video_file')) {
            $file = $request->file('video_file');
            $filename = time() . '_video_' . $file->getClientOriginalName();
            $file->move(public_path('videos'), $filename);
            $video['video_file'] = 'videos/' . $filename;
        }
        Setting::updateOrCreate(['key' => 'case_study_video'], ['value' => $video]);

        return back()->with('success', 'Case Study Page Settings updated successfully!');
    }
}
