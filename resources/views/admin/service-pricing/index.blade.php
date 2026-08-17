@extends('admin.layouts.app')

@section('content')
<div class="admin-header">
    <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 10px;">
        <a href="{{ route('admin.services.index') }}" class="btn-icon" style="text-decoration: none;">
            <i data-feather="arrow-left"></i>
        </a>
        <div>
            <h1 style="font-size: 24px; font-weight: 700;">Edit Service Page: <span style="color: var(--gold);">{{ $slug }}</span></h1>
            <p>Configure the layout and sections of this service page.</p>
        </div>
    </div>
</div>

<div style="margin-bottom: 30px; display: flex; gap: 15px; flex-wrap: wrap;">
    <a href="{{ route('admin.services.hero', $slug) }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="layout"></i> Hero Section
    </a>
    <a href="{{ route('admin.services.overview', $slug) }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="file-text"></i> Overview Section
    </a>
    <a href="{{ route('admin.services.benefits.index', $slug) }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="grid"></i> Benefits Section
    </a>
    <a href="{{ route('admin.services.process.index', $slug) }}" class="btn-ghost" style="text-decoration: none; padding: 12px 24px; border-radius: 8px; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="clock"></i> Process Section
    </a>
    <a href="{{ route('admin.services.pricing.index', $slug) }}" class="btn-gold" style="text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="dollar-sign"></i> Pricing Section
    </a>
</div>

@if (session('success'))
<div class="alert" style="background: rgba(76, 175, 80, 0.1); border: 1px solid #4CAF50; color: #4CAF50; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    {{ session('success') }}
</div>
@endif

<!-- Pricing Header Settings -->
<div class="admin-card" style="margin-bottom: 30px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="font-size: 20px; font-weight: 600;">Section Header</h2>
    </div>

    <form action="{{ route('admin.services.pricing.header', $slug) }}" method="POST" class="admin-form">
        @csrf
        <div class="form-group">
            <label for="heading">Main Heading</label>
            <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading', $header['heading'] ?? '') }}" required>
            @error('heading') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="highlight">Word(s) to highlight in Gold color</label>
            <input type="text" name="highlight" id="highlight" class="form-control" value="{{ old('highlight', $header['highlight'] ?? '') }}">
            @error('highlight') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="description">Sub-description</label>
            <textarea name="description" id="description" class="form-control" rows="2" required>{{ old('description', $header['description'] ?? '') }}</textarea>
            @error('description') <span class="error" style="color: #F44336; font-size: 13px;">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-gold btn-sm">Save Header</button>
    </form>
</div>

<!-- Pricing Plans List -->
<div class="admin-card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="font-size: 20px; font-weight: 600;">Pricing Plans</h2>
        <a href="{{ route('admin.services.pricing.create', $slug) }}" class="btn-gold btn-sm" style="text-decoration: none; padding: 8px 16px;">+ Add Plan</a>
    </div>

    @if(count($plans) > 0)
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Plan Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Features</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plans as $plan)
                <tr>
                    <td><strong>{{ $plan['name'] }}</strong></td>
                    <td><strong style="color: var(--gold);">{{ $plan['price'] }}</strong> <small>{{ $plan['price_small'] ?? '' }}</small></td>
                    <td>{{ Str::limit($plan['description'], 40) }}</td>
                    <td>{{ count(array_filter(explode("\n", $plan['bullets']))) }} features</td>
                    <td>
                        <div style="display: flex; gap: 10px;">
                            <a href="{{ route('admin.services.pricing.edit', [$slug, $plan['id']]) }}" class="btn-icon" title="Edit">
                                <i data-feather="edit-2"></i>
                            </a>
                            <form action="{{ route('admin.services.pricing.destroy', [$slug, $plan['id']]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this pricing plan?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-icon text-danger" title="Delete">
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
    <p style="color: var(--muted); padding: 20px 0; text-align: center;">No pricing plans added yet.</p>
    @endif
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
textarea.form-control { resize: vertical; }
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
.btn-sm { padding: 10px 20px; font-size: 14px; }
.admin-table { width: 100%; border-collapse: collapse; margin-top: 10px; }
.admin-table th, .admin-table td { padding: 15px; text-align: left; border-bottom: 1px solid rgba(255, 255, 255, 0.05); }
.admin-table th { color: var(--muted); font-weight: 600; font-size: 14px; }
.admin-table tbody tr:hover { background: rgba(255, 255, 255, 0.02); }
.btn-icon { width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 6px; color: #fff; cursor: pointer; transition: all 0.2s ease; }
.btn-icon i { width: 14px; height: 14px; }
.btn-icon:hover { background: rgba(255, 255, 255, 0.1); border-color: var(--gold); color: var(--gold); }
.text-danger { color: #ff5252; }
.text-danger:hover { background: rgba(255, 82, 82, 0.1); border-color: #ff5252; color: #ff5252; }
</style>
@endsection
