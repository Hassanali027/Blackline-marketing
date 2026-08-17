@extends('admin.layouts.app')

@section('content')
<div class="admin-header">
    <h1>Portfolio Settings</h1>
    <p>Manage the dynamic sections on the portfolio page.</p>
</div>

@if (session('success'))
<div class="alert" style="background: rgba(76, 175, 80, 0.1); border: 1px solid #4CAF50; color: #4CAF50; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    {{ session('success') }}
</div>
@endif

<div class="admin-card">
    <form action="{{ route('admin.portfolio-hero.update') }}" method="POST" enctype="multipart/form-data" class="admin-form">
        @csrf

        <div class="form-group">
            <label for="badge">Badge Text (e.g. CASE STUDIES)</label>
            <input type="text" name="badge" id="badge" class="form-control" value="{{ old('badge', $settings['badge']) }}" required>
            @error('badge') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="heading">Main Heading</label>
            <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading', $settings['heading']) }}" required>
            @error('heading') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="btn_text">Button Text</label>
            <input type="text" name="btn_text" id="btn_text" class="form-control" value="{{ old('btn_text', $settings['btn_text']) }}" required>
            @error('btn_text') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="btn_link">Button Link</label>
            <input type="text" name="btn_link" id="btn_link" class="form-control" value="{{ old('btn_link', $settings['btn_link']) }}" required>
            @error('btn_link') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="image">Background Image</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
            @if(!empty($settings['image']))
            <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                <a href="{{ asset($settings['image']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
            </small>
            @endif
            @error('image') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
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
