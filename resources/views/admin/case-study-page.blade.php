@extends('admin.layouts.app')

@section('content')
<div class="admin-header">
    <h1>Case Study Page Setting</h1>
    <p>Manage the dynamic sections on the case study page.</p>
</div>

@if (session('success'))
<div class="alert" style="background: rgba(76, 175, 80, 0.1); border: 1px solid #4CAF50; color: #4CAF50; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    {{ session('success') }}
</div>
@endif

<div class="admin-card">
    <form action="{{ route('admin.case-study-page.update') }}" method="POST" enctype="multipart/form-data" class="admin-form">
        @csrf

        <!-- Tabs -->
        <div class="tabs-header" style="margin-bottom: 30px; display: flex; gap: 15px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 15px; overflow-x: auto;">
            <button type="button" class="tab-btn active" data-tab="hero-tab">
                <i data-feather="layout"></i> Hero Section
            </button>
            <button type="button" class="tab-btn" data-tab="challenge-tab">
                <i data-feather="target"></i> Market Challenge
            </button>
            <button type="button" class="tab-btn" data-tab="strategy-tab">
                <i data-feather="briefcase"></i> Strategy to Life
            </button>
            <button type="button" class="tab-btn" data-tab="work-motion-tab">
                <i data-feather="image"></i> Work In Motion
            </button>
            <button type="button" class="tab-btn" data-tab="video-tab">
                <i data-feather="play-circle"></i> Case Study Video
            </button>
        </div>

        <!-- Hero Tab -->
        <div class="tab-content active" id="hero-tab">
            <div class="form-group">
                <label for="hero_badge">Badge Text (e.g. FASHION)</label>
                <input type="text" name="hero_badge" id="hero_badge" class="form-control" value="{{ old('hero_badge', $hero['badge']) }}" required>
                @error('hero_badge') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="hero_heading">Main Heading</label>
                <input type="text" name="hero_heading" id="hero_heading" class="form-control" value="{{ old('hero_heading', $hero['heading']) }}" required>
                @error('hero_heading') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="hero_description">Description</label>
                <textarea name="hero_description" id="hero_description" class="form-control" rows="3" required>{{ old('hero_description', $hero['description']) }}</textarea>
                @error('hero_description') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="hero_image">Hero Background Image</label>
                <input type="file" name="hero_image" id="hero_image" class="form-control" accept="image/*">
                @if(!empty($hero['image']))
                <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                    <a href="{{ asset($hero['image']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
                </small>
                @endif
                @error('hero_image') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Challenge Tab -->
        <div class="tab-content" id="challenge-tab" style="display: none;">
            <div class="form-group">
                <label for="challenge_heading">Challenge Heading</label>
                <input type="text" name="challenge_heading" id="challenge_heading" class="form-control" value="{{ old('challenge_heading', $challenge['heading']) }}" required>
                <small style="color: var(--muted); font-size: 12px; display: block; margin-top: 5px;">Use &lt;br&gt; for line breaks.</small>
                @error('challenge_heading') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="challenge_description">Challenge Intro Text</label>
                <textarea name="challenge_description" id="challenge_description" class="form-control" rows="4" required>{{ old('challenge_description', $challenge['description']) }}</textarea>
                @error('challenge_description') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="challenge_image">Challenge Side Image</label>
                <input type="file" name="challenge_image" id="challenge_image" class="form-control" accept="image/*">
                @if(!empty($challenge['image']))
                <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                    <a href="{{ asset($challenge['image']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
                </small>
                @endif
                @error('challenge_image') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <h4 style="margin-top: 30px; margin-bottom: 15px;">Challenge Points</h4>
            
            <div id="points-container">
                @foreach($challenge['points'] as $index => $point)
                <div class="point-item" style="background: rgba(255,255,255,0.02); padding: 20px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.05); margin-bottom: 20px;">
                    <h5 style="margin-top: 0; margin-bottom: 15px; color: var(--gold);">Point {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</h5>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="challenge_points[{{ $index }}][title]" class="form-control" value="{{ old('challenge_points.'.$index.'.title', $point['title']) }}" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 0;">
                        <label>Description</label>
                        <textarea name="challenge_points[{{ $index }}][description]" class="form-control" rows="2" required>{{ old('challenge_points.'.$index.'.description', $point['description']) }}</textarea>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Strategy Tab -->
        <div class="tab-content" id="strategy-tab" style="display: none;">
            <div class="form-group">
                <label for="strategy_heading">Strategy Heading</label>
                <input type="text" name="strategy_heading" id="strategy_heading" class="form-control" value="{{ old('strategy_heading', $strategy['heading']) }}" required>
                @error('strategy_heading') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="strategy_description_1">Paragraph 1</label>
                <textarea name="strategy_description_1" id="strategy_description_1" class="form-control" rows="4" required>{{ old('strategy_description_1', $strategy['description_1']) }}</textarea>
                @error('strategy_description_1') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>
            
            <div class="form-group">
                <label for="strategy_description_2">Paragraph 2</label>
                <textarea name="strategy_description_2" id="strategy_description_2" class="form-control" rows="4" required>{{ old('strategy_description_2', $strategy['description_2']) }}</textarea>
                @error('strategy_description_2') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="strategy_image">Strategy Large Image</label>
                <input type="file" name="strategy_image" id="strategy_image" class="form-control" accept="image/*">
                @if(!empty($strategy['image']))
                <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                    <a href="{{ asset($strategy['image']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
                </small>
                @endif
                @error('strategy_image') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Work Motion Tab -->
        <div class="tab-content" id="work-motion-tab" style="display: none;">
            <div class="form-group">
                <label for="work_motion_heading">Heading</label>
                <input type="text" name="work_motion_heading" id="work_motion_heading" class="form-control" value="{{ old('work_motion_heading', $work_motion['heading']) }}" required>
                @error('work_motion_heading') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <h4 style="margin-top: 30px; margin-bottom: 15px; color: var(--gold);">Grid Images</h4>
            
            <div class="grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <!-- Image 1 (Large Left) -->
                <div class="form-group" style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px;">
                    <label for="work_motion_image_1">Image 1 (Large Left)</label>
                    <input type="file" name="work_motion_image_1" id="work_motion_image_1" class="form-control" accept="image/*">
                    @if(!empty($work_motion['image_1']))
                    <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                        <a href="{{ asset($work_motion['image_1']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
                    </small>
                    @endif
                </div>

                <!-- Image 2 -->
                <div class="form-group" style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px;">
                    <label for="work_motion_image_2">Image 2 (Top, 2nd Column)</label>
                    <input type="file" name="work_motion_image_2" id="work_motion_image_2" class="form-control" accept="image/*">
                    @if(!empty($work_motion['image_2']))
                    <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                        <a href="{{ asset($work_motion['image_2']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
                    </small>
                    @endif
                </div>

                <!-- Image 3 -->
                <div class="form-group" style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px;">
                    <label for="work_motion_image_3">Image 3 (Bottom, 2nd Column)</label>
                    <input type="file" name="work_motion_image_3" id="work_motion_image_3" class="form-control" accept="image/*">
                    @if(!empty($work_motion['image_3']))
                    <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                        <a href="{{ asset($work_motion['image_3']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
                    </small>
                    @endif
                </div>

                <!-- Image 4 -->
                <div class="form-group" style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px;">
                    <label for="work_motion_image_4">Image 4 (Top, 3rd Column)</label>
                    <input type="file" name="work_motion_image_4" id="work_motion_image_4" class="form-control" accept="image/*">
                    @if(!empty($work_motion['image_4']))
                    <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                        <a href="{{ asset($work_motion['image_4']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
                    </small>
                    @endif
                </div>

                <!-- Image 5 -->
                <div class="form-group" style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px;">
                    <label for="work_motion_image_5">Image 5 (Bottom, 3rd Column)</label>
                    <input type="file" name="work_motion_image_5" id="work_motion_image_5" class="form-control" accept="image/*">
                    @if(!empty($work_motion['image_5']))
                    <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                        <a href="{{ asset($work_motion['image_5']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
                    </small>
                    @endif
                </div>

                <!-- Image 6 -->
                <div class="form-group" style="background: rgba(255,255,255,0.02); padding: 15px; border-radius: 8px;">
                    <label for="work_motion_image_6">Image 6 (Right Column)</label>
                    <input type="file" name="work_motion_image_6" id="work_motion_image_6" class="form-control" accept="image/*">
                    @if(!empty($work_motion['image_6']))
                    <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                        <a href="{{ asset($work_motion['image_6']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
                    </small>
                    @endif
                </div>
            </div>
        </div>

        <!-- Video Tab -->
        <div class="tab-content" id="video-tab" style="display: none;">
            <div class="form-group">
                <label for="video_thumbnail">Video Poster Thumbnail Image</label>
                <input type="file" name="video_thumbnail" id="video_thumbnail" class="form-control" accept="image/*">
                @if(!empty($video['thumbnail']))
                <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Image: 
                    <a href="{{ asset($video['thumbnail']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Image</a>
                </small>
                @endif
                @error('video_thumbnail') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="video_file">Upload Video File (.mp4, .webm)</label>
                <input type="file" name="video_file" id="video_file" class="form-control" accept="video/*">
                @if(!empty($video['video_file']))
                <small style="color: var(--muted); font-size: 13px; display: block; margin-top: 6px;">Current Video: 
                    <a href="{{ asset($video['video_file']) }}" target="_blank" style="color: var(--gold); text-decoration: underline;">View Current Video</a>
                </small>
                @endif
                @error('video_file') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
            </div>
        </div>

        <div style="margin-top: 40px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.05);">
            <button type="submit" class="btn btn-gold">Save All Settings</button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons and hide all contents
                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(c => c.style.display = 'none');

                // Add active class to clicked button and show corresponding content
                this.classList.add('active');
                document.getElementById(this.dataset.tab).style.display = 'block';
            });
        });
    });
</script>

<style>
.tab-btn {
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: var(--muted);
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}
.tab-btn:hover {
    background: rgba(255, 255, 255, 0.05);
    color: #fff;
}
.tab-btn.active {
    background: linear-gradient(90deg, #B0854A 0%, #E8C988 42%, #E4C982 58%, #BB9362 100%);
    color: #24201A;
    border-color: transparent;
}
.tab-btn i, .tab-btn svg {
    width: 16px;
    height: 16px;
}
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
textarea.form-control {
    resize: vertical;
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
