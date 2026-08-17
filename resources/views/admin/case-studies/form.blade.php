@extends('admin.layouts.app')

@php
    $isEdit = isset($study);
@endphp

@section('content')
<div class="admin-header" style="display: flex; justify-content: space-between; align-items: center;">
    <div>
        <h1>{{ $isEdit ? 'Edit Case Study' : 'Add New Case Study' }}</h1>
        <p>{{ $isEdit ? 'Update the details for this case study.' : 'Create a new dynamic case study video card.' }}</p>
    </div>
    <a href="{{ route('admin.case-studies.index') }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px;">
        Cancel &amp; Go Back
    </a>
</div>

<div class="admin-card">
    <form action="{{ $isEdit ? route('admin.case-studies.update', $study['id']) : route('admin.case-studies.store') }}" method="POST" enctype="multipart/form-data" class="admin-form">
        @csrf
        @if($isEdit)
            @method('PUT')
        @endif

        <div class="form-row">
            <div class="form-group" style="flex: 1;">
                <label for="title">Heading (e.g. Aurelio)</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $isEdit ? $study['title'] : '') }}" required>
                @error('title') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group" style="flex: 1;">
                <label for="metric">Yellow Text (e.g. 80%+ increase in reservations)</label>
                <input type="text" name="metric" id="metric" class="form-control" value="{{ old('metric', $isEdit ? $study['metric'] : '') }}" required>
                @error('metric') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="description">Description Text</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $isEdit ? $study['description'] : '') }}</textarea>
            @error('description') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-row">
            <div class="form-group" style="flex: 1;">
                <label for="btn_text">Button Text (e.g. View Case Study)</label>
                <input type="text" name="btn_text" id="btn_text" class="form-control" value="{{ old('btn_text', $isEdit ? $study['btn_text'] : 'View Case Study') }}" required>
                @error('btn_text') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group" style="flex: 1;">
                <label for="btn_link">Button Link (URL)</label>
                <input type="text" name="btn_link" id="btn_link" class="form-control" value="{{ old('btn_link', $isEdit ? $study['btn_link'] : '#') }}" required>
                @error('btn_link') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="form-group">
            <label for="video">Background Video (MP4)</label>
            <input type="file" name="video" id="video" class="form-control" accept="video/mp4,video/x-m4v,video/*" {{ $isEdit ? '' : 'required' }}>
            @if($isEdit && isset($study['video']))
                <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Video: {{ $study['video'] }} (Leave empty to keep current)</small>
            @endif
            @error('video') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div style="margin-top: 30px;">
            <button type="submit" class="btn-gold">{{ $isEdit ? 'Update Case Study' : 'Save New Case Study' }}</button>
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
.form-row {
    display: flex;
    gap: 24px;
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
@media (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 0;
    }
}
</style>
@endsection
