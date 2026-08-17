@extends('admin.layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h2>Add Blog Post</h2>
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
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px;">
            <div>
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="title" style="display: block; margin-bottom: 8px; color: var(--muted);">Blog Title *</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}" required style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="category" style="display: block; margin-bottom: 8px; color: var(--muted);">Category * (Type a new category or reuse an existing one)</label>
                    <input type="text" id="category" name="category" value="{{ old('category') }}" required style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;" placeholder="e.g. Marketing Tips, SEO Optimized">
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="author_id" style="display: block; margin-bottom: 8px; color: var(--muted);">Author</label>
                    <select id="author_id" name="author_id" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
                        <option value="">Select an Author (Optional)</option>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="short_description" style="display: block; margin-bottom: 8px; color: var(--muted);">Short Description (Excerpt)</label>
                    <textarea id="short_description" name="short_description" style="width: 100%; padding: 12px; background: rgba(0,0,0,0.2); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px; height: 80px;">{{ old('short_description') }}</textarea>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="content" style="display: block; margin-bottom: 8px; color: var(--muted);">Blog Content *</label>
                    <div id="editorjs"></div>
                    <textarea id="content" name="content" style="display:none;">{{ old('content') }}</textarea>
                </div>
            </div>

            <div>
                <div class="admin-card" style="background: rgba(0,0,0,0.2); margin-bottom: 20px; padding: 20px;">
                    <h3 style="margin-top: 0; font-size: 16px; margin-bottom: 15px;">Cover Image</h3>
                    <div class="form-group">
                        <input type="file" id="image" name="image" accept="image/*" style="width: 100%; padding: 10px; color: var(--muted);">
                        <p style="font-size: 12px; color: #888; margin-top: 5px;">Recommended size: 1200x630px.</p>
                    </div>
                </div>

                <div class="admin-card" style="background: rgba(0,0,0,0.2); padding: 20px;">
                    <h3 style="margin-top: 0; font-size: 16px; margin-bottom: 15px;">SEO Settings</h3>
                    
                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="meta_title" style="display: block; margin-bottom: 5px; font-size: 13px; color: var(--muted);">Meta Title</label>
                        <input type="text" id="meta_title" name="meta_title" value="{{ old('meta_title') }}" style="width: 100%; padding: 10px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;">
                    </div>

                    <div class="form-group" style="margin-bottom: 15px;">
                        <label for="meta_keywords" style="display: block; margin-bottom: 5px; font-size: 13px; color: var(--muted);">Meta Keywords</label>
                        <input type="text" id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}" style="width: 100%; padding: 10px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px;" placeholder="marketing, branding, etc...">
                    </div>

                    <div class="form-group">
                        <label for="meta_description" style="display: block; margin-bottom: 5px; font-size: 13px; color: var(--muted);">Meta Description</label>
                        <textarea id="meta_description" name="meta_description" style="width: 100%; padding: 10px; background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.1); color: #fff; border-radius: 4px; height: 80px;">{{ old('meta_description') }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.05); text-align: right;">
            <button type="submit" class="btn btn-gold">Publish Blog</button>
        </div>
    </form>
</div>

<!-- Editor.js -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/checklist@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/table@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/code@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/raw@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>

<script>
    const editorTools = {};
    if (typeof Header !== 'undefined') editorTools.header = Header;
    if (typeof List !== 'undefined') editorTools.list = List;
    if (typeof Checklist !== 'undefined') editorTools.checklist = Checklist;
    if (typeof Quote !== 'undefined') editorTools.quote = Quote;
    if (typeof Delimiter !== 'undefined') editorTools.delimiter = Delimiter;
    if (typeof Table !== 'undefined') editorTools.table = Table;
    if (typeof CodeTool !== 'undefined') editorTools.code = CodeTool;
    if (typeof RawTool !== 'undefined') editorTools.raw = RawTool;
    if (typeof LinkTool !== 'undefined') editorTools.linkTool = LinkTool;
    if (typeof SimpleImage !== 'undefined') editorTools.image = SimpleImage;

    let editorConfig = {
        holder: 'editorjs',
        placeholder: 'Click here to start writing your blog...',
        tools: editorTools,
        onChange: () => {
            editor.save().then((outputData) => {
                document.querySelector('#content').value = JSON.stringify(outputData);
            }).catch((error) => {
                console.error('Saving failed: ', error);
            });
        }
    };

    try {
        const contentVal = document.querySelector('#content').value;
        if(contentVal && contentVal.trim().startsWith('{')) {
            const parsedData = JSON.parse(contentVal);
            if (parsedData && parsedData.blocks) {
                editorConfig.data = parsedData;
            }
        }
    } catch(e) {
        console.error("Could not parse initial data as JSON", e);
    }

    const editor = new EditorJS(editorConfig);
</script>
<style>
    /* Light mode adjustments for Editor.js */
    #editorjs {
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 20px;
        color: #333;
        min-height: 400px;
    }

    /* Make text, placeholder and icons dark for white background */
    .ce-block__content {
        color: #333 !important;
    }
    [data-placeholder]:empty::before {
        color: #999 !important;
    }
    .ce-toolbar__plus, .ce-toolbar__settings-btn {
        color: #333 !important;
    }
    .ce-toolbar__plus:hover, .ce-toolbar__settings-btn:hover {
        background-color: #f0f0f0 !important;
    }

    .ce-block__content, .ce-toolbar__content {
        max-width: calc(100% - 80px) !important;
    }
    .ce-toolbar__actions {
        color: #333;
    }
    .ce-popover, .ce-settings {
        background-color: #fff;
        color: #333;
        border: 1px solid #ddd;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .ce-popover__item:hover, .ce-settings__button:hover {
        background-color: #f5f5f5;
        color: #333 !important;
    }
    .ce-popover-item__icon {
        background-color: #fff;
        color: #333;
        border: 1px solid #eee;
    }
    .ce-inline-tool {
        color: #333;
    }
    .ce-inline-toolbar {
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .ce-inline-toolbar__buttons, .ce-inline-toolbar__actions {
        background-color: #fff;
    }
    .ce-inline-tool:hover {
        background-color: #f5f5f5;
    }
    .codex-editor__redactor {
        padding-bottom: 50px !important;
    }
    .cdx-input {
        background: #fff;
        color: #333;
        border: 1px solid #ccc;
    }
    ::selection {
        background: rgba(229, 202, 131, 0.3);
    }
</style>
@endsection
