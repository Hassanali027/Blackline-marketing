@extends('admin.layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h2>Add New Author</h2>
    <a href="{{ route('admin.authors.index') }}" class="btn btn-gold" style="background: transparent; border: 1px solid var(--gold); color: var(--gold);">Cancel</a>
</div>

@if($errors->any())
    <div style="background: rgba(255, 71, 87, 0.1); color: #ff4757; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(255,71,87,0.2);">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="admin-card">
    <form action="{{ route('admin.authors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
            <div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="name" style="display: block; margin-bottom: 8px; color: var(--muted);">Author Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="description" style="display: block; margin-bottom: 8px; color: var(--muted);">Short Bio / Description</label>
                    <textarea id="description" name="description" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px; height: 120px;">{{ old('description') }}</textarea>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="linkedin_url" style="display: block; margin-bottom: 8px; color: var(--muted);">LinkedIn URL</label>
                    <input type="url" id="linkedin_url" name="linkedin_url" value="{{ old('linkedin_url') }}" placeholder="https://linkedin.com/in/username" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="twitter_url" style="display: block; margin-bottom: 8px; color: var(--muted);">Twitter/X URL</label>
                    <input type="url" id="twitter_url" name="twitter_url" value="{{ old('twitter_url') }}" placeholder="https://twitter.com/username" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
                </div>
            </div>

            <div>
                <div class="admin-card" style="background: rgba(0,0,0,0.2); margin-bottom: 20px; padding: 20px;">
                    <h3 style="margin-top: 0; font-size: 16px; margin-bottom: 15px;">Author Picture</h3>
                    <div class="form-group">
                        <input type="file" id="picture" name="picture" accept="image/*" style="width: 100%; padding: 10px; color: var(--muted);">
                        <p style="font-size: 12px; color: #888; margin-top: 5px;">Recommended: Square image (e.g., 400x400px).</p>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.05); text-align: right;">
            <button type="submit" class="btn btn-gold">Save Author</button>
        </div>
    </form>
</div>
@endsection
