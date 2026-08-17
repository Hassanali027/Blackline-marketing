<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        // Get all FAQs grouped by category
        // FAQs without a category will be grouped under 'General'
        $faqs = \App\Models\Faq::all()->groupBy(function($faq) {
            return $faq->category ?: 'General';
        });

        return view('faqs', compact('faqs'));
    }
}
