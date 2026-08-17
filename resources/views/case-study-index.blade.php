@extends('layouts.app')

@section('content')
<main style="padding: 150px 20px; text-align: center; color: white;">
    <h1>Our Case Studies</h1>
    <div style="display: flex; gap: 20px; justify-content: center; margin-top: 40px; flex-wrap: wrap;">
        @foreach($pages as $page)
            <a href="{{ route('case-study.show', $page->slug) }}" style="display: block; padding: 30px; background: #1B1B1D; border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; color: white; text-decoration: none; width: 300px;">
                <h2 style="font-size: 24px; color: #E5CA83; margin-bottom: 10px;">{{ $page->title }}</h2>
                <p>View Case Study &rarr;</p>
            </a>
        @endforeach
        @if($pages->isEmpty())
            <p>No case studies available.</p>
        @endif
    </div>
</main>
@endsection
