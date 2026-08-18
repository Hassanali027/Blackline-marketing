@extends('admin.layouts.app')

@section('content')
<div class="admin-header">
    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
        <a href="{{ route('admin.services.index') }}" class="btn-icon" style="text-decoration: none;">
            <i data-feather="arrow-left"></i>
        </a>
        <div>
            <h1 style="font-size: 24px; font-weight: 700;">Edit Service Page: <span style="color: var(--gold);">{{ $slug }}</span></h1>
            <p>Configure SEO tags for this service page.</p>
        </div>
    </div>
</div>

<div style="margin-bottom: 30px; display: flex; gap: 15px; flex-wrap: wrap;">
    <a href="{{ route('admin.services.hero', $slug) }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="layout"></i> Hero Section
    </a>
    <a href="{{ route('admin.services.overview', $slug) }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="file-text"></i> Overview Section
    </a>
    <a href="{{ route('admin.services.benefits.index', $slug) }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="grid"></i> Benefits Section
    </a>
    <a href="{{ route('admin.services.process.index', $slug) }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="clock"></i> Process Section
    </a>
    <a href="{{ route('admin.services.pricing.index', $slug) }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="dollar-sign"></i> Pricing Section
    </a>
    <a href="{{ route('admin.services.seo', $slug) }}" class="btn-gold" style="text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="search"></i> SEO Settings
    </a>
</div>

@if (session('success'))
<div class="alert" style="background: rgba(76, 175, 80, 0.1); border: 1px solid #4CAF50; color: #4CAF50; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    {{ session('success') }}
</div>
@endif

<div class="admin-card">
    <form action="{{ route('admin.services.seo.update', $slug) }}" method="POST" class="admin-form">
        @csrf

        <div class="form-group">
            <label for="meta_title">Meta Title</label>
            <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $service->meta_title) }}">
            @error('meta_title') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="meta_keywords">Meta Keywords</label>
            <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" value="{{ old('meta_keywords', $service->meta_keywords) }}" placeholder="e.g. digital marketing, social media">
            @error('meta_keywords') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>
        
        <div class="form-group">
            <label for="meta_description">Meta Description</label>
            <textarea name="meta_description" id="meta_description" class="form-control" style="height: 100px;">{{ old('meta_description', $service->meta_description) }}</textarea>
            @error('meta_description') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
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
.btn-ghost {
    border: 1.5px solid rgba(250, 249, 246, 0.25);
    color: #fff;
    background: transparent;
    transition: all 0.25s ease;
}
.btn-ghost:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(250, 249, 246, 0.6);
}
.btn-icon {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    color: #fff;
    cursor: pointer;
    transition: all 0.2s ease;
}
.btn-icon:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: var(--gold);
    color: var(--gold);
}
</style>
@endsection
