@extends('admin.layouts.app')

@section('content')
<div class="admin-header">
    <h1>Home Page Settings</h1>
    <p>Manage the dynamic sections on the homepage.</p>
</div>

<div style="margin-bottom: 30px; display: flex; gap: 15px;">
    <a href="{{ route('admin.home-hero') }}" class="btn-gold" style="text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="layout"></i> Hero Section
    </a>
    <a href="{{ route('admin.case-studies.index') }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="video"></i> Case Study Videos
    </a>
    <a href="{{ route('admin.feedbacks.index') }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="message-square"></i> Feedbacks
    </a>
</div>

@if (session('success'))
<div class="alert" style="background: rgba(76, 175, 80, 0.1); border: 1px solid #4CAF50; color: #4CAF50; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    {{ session('success') }}
</div>
@endif

<div class="admin-card">
    <form action="{{ route('admin.home-hero.update') }}" method="POST" enctype="multipart/form-data" class="admin-form">
        @csrf

        <div class="form-group">
            <label for="heading">Main Heading (use &lt;br&gt; for new line)</label>
            <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading', $settings['heading']) }}" required>
            @error('heading') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="primary_word">Primary (Gold) Word</label>
            <input type="text" name="primary_word" id="primary_word" class="form-control" value="{{ old('primary_word', $settings['primary_word']) }}">
            <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">This word in the heading will automatically be colored gold.</small>
            @error('primary_word') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="description">Sub Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $settings['description']) }}</textarea>
            @error('description') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="video">Background Video (MP4)</label>
            <input type="file" name="video" id="video" class="form-control" accept="video/mp4,video/x-m4v,video/*">
            <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Video: {{ $settings['video'] }} (Leave empty to keep current)</small>
            @error('video') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-top: 30px;">
            <button type="submit" class="btn btn-gold">Save Settings</button>
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
textarea.form-control {
    resize: vertical;
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
</style>
@endsection
