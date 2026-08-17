@extends('admin.layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h2>Contact Us & Social Media Settings</h2>
</div>

@if(session('success'))
    <div style="background: rgba(46, 213, 115, 0.1); color: #2ed573; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(46,213,115,0.2);">
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

<div class="admin-card">
    <form action="{{ route('admin.contact-settings.update') }}" method="POST">
        @csrf
        
        <h3 style="color: var(--gold); margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 10px;">Contact Information</h3>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="contact_phone" style="display: block; margin-bottom: 8px; color: var(--muted);">Phone Number</label>
                <input type="text" id="contact_phone" name="contact_phone" value="{{ json_decode($settings['contact_phone'] ?? 'null') }}" placeholder="e.g. 1800-518-9441" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label for="contact_email" style="display: block; margin-bottom: 8px; color: var(--muted);">Email Address</label>
                <input type="email" id="contact_email" name="contact_email" value="{{ json_decode($settings['contact_email'] ?? 'null') }}" placeholder="e.g. support@myboxpackaging.com" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>
        </div>
        
        <div class="form-group" style="margin-bottom: 30px;">
            <label for="contact_address" style="display: block; margin-bottom: 8px; color: var(--muted);">Physical Address</label>
            <textarea id="contact_address" name="contact_address" placeholder="e.g. 132 Dartmouth Street Boston, Massachusetts 02156 United States" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px; height: 80px;">{{ json_decode($settings['contact_address'] ?? 'null') }}</textarea>
        </div>

        <h3 style="color: var(--gold); margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 10px;">Social Media Links</h3>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="contact_facebook" style="display: block; margin-bottom: 8px; color: var(--muted);">Facebook URL</label>
                <input type="url" id="contact_facebook" name="contact_facebook" value="{{ json_decode($settings['contact_facebook'] ?? 'null') }}" placeholder="https://facebook.com/..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label for="contact_twitter" style="display: block; margin-bottom: 8px; color: var(--muted);">Twitter/X URL</label>
                <input type="url" id="contact_twitter" name="contact_twitter" value="{{ json_decode($settings['contact_twitter'] ?? 'null') }}" placeholder="https://twitter.com/..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label for="contact_instagram" style="display: block; margin-bottom: 8px; color: var(--muted);">Instagram URL</label>
                <input type="url" id="contact_instagram" name="contact_instagram" value="{{ json_decode($settings['contact_instagram'] ?? 'null') }}" placeholder="https://instagram.com/..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label for="contact_youtube" style="display: block; margin-bottom: 8px; color: var(--muted);">YouTube URL</label>
                <input type="url" id="contact_youtube" name="contact_youtube" value="{{ json_decode($settings['contact_youtube'] ?? 'null') }}" placeholder="https://youtube.com/..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label for="contact_linkedin" style="display: block; margin-bottom: 8px; color: var(--muted);">LinkedIn URL</label>
                <input type="url" id="contact_linkedin" name="contact_linkedin" value="{{ json_decode($settings['contact_linkedin'] ?? 'null') }}" placeholder="https://linkedin.com/..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.05); text-align: right;">
            <button type="submit" class="btn btn-gold">Save Settings</button>
        </div>
    </form>
</div>
@endsection
