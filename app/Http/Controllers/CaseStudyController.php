<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaseStudyPage;

class CaseStudyController extends Controller
{
    public function index()
    {
        // For the main /case-study page, we might want to list all case studies
        // or redirect. For now, let's list them or fetch the first one.
        $pages = CaseStudyPage::all();
        return view('case-study-index', compact('pages')); // if this view doesn't exist, we'll create a simple one or just show the first page.
    }

    public function show($slug)
    {
        $page = CaseStudyPage::where('slug', $slug)->firstOrFail();
        
        $hero = $page->hero ?? [];
        $challenge = $page->challenge ?? [];
        $strategy = $page->strategy ?? [];
        $work_motion = $page->work_motion ?? [];
        $video = $page->video ?? [];

        $faqs = \App\Models\Faq::whereJsonContains('pages', 'case-study')->get();

        return view('case-study-page', compact('page', 'hero', 'challenge', 'strategy', 'work_motion', 'video', 'faqs'));
    }
}
