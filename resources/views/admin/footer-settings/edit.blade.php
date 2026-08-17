@extends('admin.layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h2>Footer Settings</h2>
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
    <form action="{{ route('admin.footer-settings.update') }}" method="POST">
        @csrf
        
        <h3 style="color: var(--gold); margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 10px;">Footer Description</h3>
        <div class="form-group" style="margin-bottom: 30px;">
            <label for="footer_description" style="display: block; margin-bottom: 8px; color: var(--muted);">Description Text</label>
            <textarea id="footer_description" name="footer_description" placeholder="Transforming ambitious brands into cultural icons..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px; height: 100px;">{{ json_decode($settings['footer_description'] ?? 'null') }}</textarea>
        </div>

        <h3 style="color: var(--gold); margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 10px;">Social Media Links (Left Column)</h3>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;">
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="footer_facebook" style="display: block; margin-bottom: 8px; color: var(--muted);">Facebook URL</label>
                <input type="url" id="footer_facebook" name="footer_facebook" value="{{ json_decode($settings['footer_facebook'] ?? 'null') }}" placeholder="https://facebook.com/..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label for="footer_twitter" style="display: block; margin-bottom: 8px; color: var(--muted);">Twitter/X URL</label>
                <input type="url" id="footer_twitter" name="footer_twitter" value="{{ json_decode($settings['footer_twitter'] ?? 'null') }}" placeholder="https://twitter.com/..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label for="footer_instagram" style="display: block; margin-bottom: 8px; color: var(--muted);">Instagram URL</label>
                <input type="url" id="footer_instagram" name="footer_instagram" value="{{ json_decode($settings['footer_instagram'] ?? 'null') }}" placeholder="https://instagram.com/..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>
            
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="footer_linkedin" style="display: block; margin-bottom: 8px; color: var(--muted);">LinkedIn URL</label>
                <input type="url" id="footer_linkedin" name="footer_linkedin" value="{{ json_decode($settings['footer_linkedin'] ?? 'null') }}" placeholder="https://linkedin.com/..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>

            <div class="form-group" style="margin-bottom: 20px;">
                <label for="footer_youtube" style="display: block; margin-bottom: 8px; color: var(--muted);">YouTube URL</label>
                <input type="url" id="footer_youtube" name="footer_youtube" value="{{ json_decode($settings['footer_youtube'] ?? 'null') }}" placeholder="https://youtube.com/..." style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
            </div>
        </div>
        
        <h3 style="color: var(--gold); margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 10px;">Services Shown in Footer</h3>
        <p style="color: var(--muted); margin-bottom: 15px; font-size: 14px;">Select the services you want to display in the footer Services list.</p>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 30px; background: rgba(0,0,0,0.2); padding: 20px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05);">
            @foreach($services as $service)
                <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                    <input type="checkbox" name="services[]" value="{{ $service->id }}" {{ $service->show_in_footer ? 'checked' : '' }} style="width: 18px; height: 18px; accent-color: var(--gold);">
                    <span style="color: #fff;">{{ $service->title }}</span>
                </label>
            @endforeach
        </div>

        <h3 style="color: var(--gold); margin-bottom: 20px; border-bottom: 1px solid rgba(255,255,255,0.05); padding-bottom: 10px;">Useful Links</h3>
        <p style="color: var(--muted); margin-bottom: 15px; font-size: 14px;">Add custom links that will appear under the "Useful Links" column.</p>
        
        <div id="useful-links-container">
            @php
                $usefulLinks = json_decode($settings['footer_useful_links'] ?? '[]', true) ?: [];
            @endphp
            
            @if(count($usefulLinks) > 0)
                @foreach($usefulLinks as $index => $link)
                    <div class="useful-link-row" style="display: flex; gap: 15px; margin-bottom: 15px; align-items: center;">
                        <input type="text" name="footer_useful_links[{{$index}}][title]" value="{{ $link['title'] ?? '' }}" placeholder="Link Title (e.g. Portfolio)" style="flex: 1; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;" required>
                        <input type="text" name="footer_useful_links[{{$index}}][url]" value="{{ $link['url'] ?? '' }}" placeholder="URL (e.g. /portfolio or https://...)" style="flex: 2; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;" required>
                        <button type="button" onclick="this.parentElement.remove()" style="background: rgba(255, 71, 87, 0.1); color: #ff4757; border: 1px solid rgba(255,71,87,0.2); padding: 10px 15px; border-radius: 4px; cursor: pointer;"><i data-feather="trash-2"></i></button>
                    </div>
                @endforeach
            @else
                <div class="useful-link-row" style="display: flex; gap: 15px; margin-bottom: 15px; align-items: center;">
                    <input type="text" name="footer_useful_links[0][title]" placeholder="Link Title (e.g. Portfolio)" style="flex: 1; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;" required>
                    <input type="text" name="footer_useful_links[0][url]" placeholder="URL (e.g. /portfolio or https://...)" style="flex: 2; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;" required>
                    <button type="button" onclick="this.parentElement.remove()" style="background: rgba(255, 71, 87, 0.1); color: #ff4757; border: 1px solid rgba(255,71,87,0.2); padding: 10px 15px; border-radius: 4px; cursor: pointer;"><i data-feather="trash-2"></i></button>
                </div>
            @endif
        </div>
        
        <button type="button" id="add-link-btn" style="background: rgba(46, 213, 115, 0.1); color: #2ed573; border: 1px solid rgba(46,213,115,0.2); padding: 10px 20px; border-radius: 4px; cursor: pointer; margin-bottom: 30px; display: inline-flex; align-items: center; gap: 8px;">
            <i data-feather="plus"></i> Add New Link
        </button>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.05); text-align: right;">
            <button type="submit" class="btn btn-gold">Save Settings</button>
        </div>
    </form>
</div>

<script>
    let linkIndex = {{ count(json_decode($settings['footer_useful_links'] ?? '[]', true) ?: [1]) }};
    document.getElementById('add-link-btn').addEventListener('click', function() {
        const container = document.getElementById('useful-links-container');
        const row = document.createElement('div');
        row.className = 'useful-link-row';
        row.style = 'display: flex; gap: 15px; margin-bottom: 15px; align-items: center;';
        row.innerHTML = `
            <input type="text" name="footer_useful_links[${linkIndex}][title]" placeholder="Link Title (e.g. Portfolio)" style="flex: 1; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;" required>
            <input type="text" name="footer_useful_links[${linkIndex}][url]" placeholder="URL (e.g. /portfolio or https://...)" style="flex: 2; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;" required>
            <button type="button" onclick="this.parentElement.remove()" style="background: rgba(255, 71, 87, 0.1); color: #ff4757; border: 1px solid rgba(255,71,87,0.2); padding: 10px 15px; border-radius: 4px; cursor: pointer;"><i data-feather="trash-2"></i></button>
        `;
        container.appendChild(row);
        feather.replace();
        linkIndex++;
    });
</script>
@endsection
