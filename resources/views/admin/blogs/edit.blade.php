@extends('admin.layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h2>Edit Blog Post</h2>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-gold" style="background: transparent; border: 1px solid var(--gold); color: var(--gold);">Cancel</a>
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
    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
            <div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="title" style="display: block; margin-bottom: 8px; color: var(--muted);">Blog Title *</label>
                    <input type="text" id="title" name="title" value="{{ old('title', $blog->title) }}" required style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="category" style="display: block; margin-bottom: 8px; color: var(--muted);">Category *</label>
                    <input type="text" id="category" name="category" value="{{ old('category', $blog->category) }}" required style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="short_description" style="display: block; margin-bottom: 8px; color: var(--muted);">Short Description (Excerpt)</label>
                    <textarea id="short_description" name="short_description" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px; height: 80px;">{{ old('short_description', $blog->short_description) }}</textarea>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="content" style="display: block; margin-bottom: 8px; color: var(--muted);">Blog Content *</label>
                    <textarea id="content" name="content">{{ old('content', $blog->content) }}</textarea>
                </div>
            </div>

            <div>
                <div class="admin-card" style="background: rgba(0,0,0,0.2); margin-bottom: 20px; padding: 20px;">
                    <h3 style="margin-top: 0; font-size: 16px; margin-bottom: 15px;">Cover Image</h3>
                    @if($blog->image)
                        <div style="margin-bottom: 15px;">
                            <img src="{{ asset($blog->image) }}" alt="Current Image" style="width: 100%; border-radius: 4px;">
                        </div>
                    @endif
                    <div class="form-group">
                        <label style="font-size: 13px; color: var(--muted); margin-bottom: 5px; display: block;">Replace Image (optional)</label>
                        <input type="file" id="image" name="image" accept="image/*" style="width: 100%; padding: 10px; color: var(--muted);">
                    </div>
                </div>

                <div class="admin-card" style="background: rgba(0,0,0,0.2); padding: 20px;">
                    <h3 style="margin-top: 0; font-size: 16px; margin-bottom: 15px;">SEO Settings</h3>
                    
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="meta_title" style="display: block; margin-bottom: 5px; font-size: 13px; color: var(--muted);">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title', $blog->meta_title) }}" style="width: 100%; padding: 10px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
                    </div>

                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="meta_keywords" style="display: block; margin-bottom: 5px; font-size: 13px; color: var(--muted);">Meta Keywords</label>
                        <input type="text" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords', $blog->meta_keywords) }}" style="width: 100%; padding: 10px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
                    </div>

                    <div class="form-group">
                        <label for="meta_description" style="display: block; margin-bottom: 5px; font-size: 13px; color: var(--muted);">Meta Description</label>
                        <textarea id="meta_description" name="meta_description" style="width: 100%; padding: 10px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px; height: 80px;">{{ old('meta_description', $blog->meta_description) }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.05); text-align: right;">
            <button type="submit" class="btn btn-gold">Update Blog</button>
        </div>
    </form>
</div>

<!-- CKEditor 5 -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#content' ), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'insertTable', 'undo', 'redo' ]
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
<style>
    /* Dark mode adjustments for CKEditor */
    .ck.ck-editor__main>.ck-editor__editable {
        background: rgba(0,0,0,0.2) !important;
        border-color: rgba(255,255,255,0.1) !important;
        color: #fff !important;
        min-height: 400px;
    }
    .ck.ck-toolbar {
        background: rgba(255,255,255,0.05) !important;
        border-color: rgba(255,255,255,0.1) !important;
    }
    .ck.ck-toolbar .ck-button {
        color: #fff !important;
    }
    .ck.ck-toolbar .ck-button:hover {
        background: rgba(255,255,255,0.1) !important;
    }
    .ck.ck-toolbar .ck-button.ck-on {
        background: rgba(229, 202, 131, 0.2) !important;
        color: var(--gold) !important;
    }
</style>
@endsection
