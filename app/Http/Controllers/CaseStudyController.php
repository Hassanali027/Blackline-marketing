<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index()
    {
        return view('case-study-page');
    }
}
