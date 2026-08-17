@extends('admin.layouts.app')

@section('content')
<div class="admin-header">
    <h1>Case Study Pages</h1>
    <p>Create and manage dynamic case study pages for your website.</p>
</div>

@if (session('success'))
<div class="alert" style="background: rgba(76, 175, 80, 0.1); border: 1px solid #4CAF50; color: #4CAF50; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert" style="background: rgba(244, 67, 54, 0.1); border: 1px solid #F44336; color: #F44336; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
</div>
@endif

<div style="display: flex; gap: 30px; margin-top: 30px; align-items: flex-start;">
    <!-- Pages List -->
    <div class="admin-card" style="flex: 2;">
        <h2 style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Existing Case Study Pages</h2>
        
        @if(count($pages) > 0)
        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Page Title</th>
                        <th>URL Path (Slug)</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                    <tr>
                        <td><strong>{{ $page['title'] }}</strong></td>
                        <td><code style="background: rgba(255,255,255,0.05); padding: 4px 8px; border-radius: 4px; color: var(--gold);">/case-study/{{ $page['slug'] }}</code></td>
                        <td>
                            <div style="display: flex; gap: 10px;">
                                <a href="{{ route('admin.case-study-pages.edit', $page['slug']) }}" class="btn-gold btn-sm" style="text-decoration: none; padding: 6px 12px; font-size: 13px;">
                                    Edit Sections
                                </a>
                                <form action="{{ route('admin.case-study-pages.destroy', $page['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this case study page? This will delete all its sections.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-icon text-danger" title="Delete Page">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
        <p style="color: var(--muted); text-align: center; padding: 30px 0;">No case study pages found.</p>
        @endif
    </div>

    <!-- Create Form -->
    <div class="admin-card" style="flex: 1;">
        <h2 style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Add Case Study Page</h2>
        
        <form action="{{ route('admin.case-study-pages.store') }}" method="POST" class="admin-form">
            @csrf
            <div class="form-group">
                <label for="title">Page Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="e.g. Maison Noir" required>
            </div>
            
            <div class="form-group">
                <label for="slug">URL Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" placeholder="e.g. maison-noir" required>
                <small style="color: var(--muted); margin-top: 4px; display: block;">Letters, numbers, and dashes only.</small>
            </div>

            <button type="submit" class="btn btn-gold" style="width: 100%;">Create Page</button>
        </form>
    </div>
</div>

<style>
.admin-card {
    background: #1B1B1D;
    border: 1px solid var(--gold-line);
    border-radius: var(--radius);
    padding: 30px;
}
.form-group {
    margin-bottom: 20px;
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
    text-align: center;
}
.btn-gold:hover {
    background-position: right center;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(196, 155, 84, 0.3);
}
.btn-sm {
    padding: 8px 16px;
    font-size: 14px;
}
.admin-table {
    width: 100%;
    border-collapse: collapse;
}
.admin-table th, .admin-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}
.admin-table th {
    color: var(--muted);
    font-weight: 600;
    font-size: 14px;
}
.btn-icon {
    width: 32px;
    height: 32px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 6px;
    color: #fff;
    cursor: pointer;
    transition: all 0.2s ease;
}
.btn-icon i {
    width: 14px;
    height: 14px;
}
.btn-icon:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: #ff5252;
    color: #ff5252;
}
.text-danger {
    color: #ff5252;
}
</style>

<script>
document.getElementById('title').addEventListener('input', function() {
    var title = this.value;
    var slug = title.toLowerCase()
                    .replace(/[^a-z0-9\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/-+/g, '-');
    document.getElementById('slug').value = slug;
});
</script>
@endsection
