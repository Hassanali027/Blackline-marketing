@extends('admin.layouts.app')

@section('content')
<div class="admin-header">
    <h1>Static Pages SEO Settings</h1>
    <p>Manage meta title, description, and keywords for all static pages.</p>
</div>

@if (session('success'))
<div class="alert" style="background: rgba(76, 175, 80, 0.1); border: 1px solid #4CAF50; color: #4CAF50; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    {{ session('success') }}
</div>
@endif

@if($errors->any())
    <div style="background: rgba(255, 71, 87, 0.1); color: #ff4757; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(255,71,87,0.2);">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="admin-card" style="margin-bottom: 30px; background: rgba(255,255,255,0.02); padding: 20px;">
    <h3 style="margin-top: 0;">Select Page to Edit</h3>
    <form action="{{ route('admin.seo-settings') }}" method="GET" style="display: flex; gap: 15px; align-items: flex-end;">
        <div style="flex: 1;">
            <select name="page" class="form-control" onchange="this.form.submit()">
                @foreach($pages as $key => $label)
                    <option value="{{ $key }}" {{ $selectedPage === $key ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>

<div class="admin-card">
    <h2 style="margin-top: 0; margin-bottom: 25px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 15px;">SEO for: <span style="color: var(--gold);">{{ $pages[$selectedPage] }}</span></h2>
    
    <form action="{{ route('admin.seo-settings.update') }}" method="POST" class="admin-form">
        @csrf
        <input type="hidden" name="page" value="{{ $selectedPage }}">

        <div class="form-group">
            <label for="meta_title">Meta Title</label>
            <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $seoSettings['meta_title'] ?? '') }}">
            <small style="color: var(--muted); font-size: 12px; display: block; margin-top: 5px;">Ideal length: 50-60 characters.</small>
        </div>

        <div class="form-group">
            <label for="meta_keywords">Meta Keywords</label>
            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" value="{{ old('meta_keywords', $seoSettings['meta_keywords'] ?? '') }}" placeholder="e.g. digital marketing, social media">
            <small style="color: var(--muted); font-size: 12px; display: block; margin-top: 5px;">Separate keywords with commas.</small>
        </div>
        
        <div class="form-group">
            <label for="meta_description">Meta Description</label>
            <textarea name="meta_description" id="meta_description" class="form-control" style="height: 100px;">{{ old('meta_description', $seoSettings['meta_description'] ?? '') }}</textarea>
            <small style="color: var(--muted); font-size: 12px; display: block; margin-top: 5px;">Ideal length: 150-160 characters.</small>
        </div>

        <div style="margin-top: 30px;">
            <button type="submit" class="btn btn-gold">Save SEO Settings</button>
        </div>
    </form>
</div>

<style>
.admin-card {
    background: #1B1B1D;
    border: 1px solid var(--gold-line);
    border-radius: var(--radius);
    padding: 30px;
}
.form-group {
    margin-bottom: 24px;
}
.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 500;
    color: var(--muted);
}
.form-control {
    width: 100%;
    padding: 12px 16px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    color: #fff;
    font-family: inherit;
    font-size: 15px;
    transition: all 0.25s ease;
}
.form-control:focus {
    outline: none;
    border-color: var(--gold);
    background: rgba(255, 255, 255, 0.08);
}
select.form-control option {
    background-color: #1B1B1D;
    color: #fff;
}
.btn-gold {
    background: linear-gradient(90deg, #B0854A 0%, #E8C988 42%, #E4C982 58%, #BB9362 100%);
    background-size: 200% auto;
    color: #24201A;
    border: none;
    padding: 14px 30px;
    border-radius: 8px;
    font-weight: 700;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.btn-gold:hover {
    background-position: right center;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(196, 155, 84, 0.3);
}
</style>
@endsection
