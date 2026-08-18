@extends('admin.layouts.app')

@section('content')
<div class="dashboard-header">
    <h1>Welcome back, {{ session('admin_name', 'Admin') }}</h1>
    <p>Here's what's happening with your website today.</p>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon"><i data-feather="briefcase"></i></div>
        <div class="stat-info">
            <h3>Total Services</h3>
            <p>{{ $stats['services'] ?? 0 }}</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon"><i data-feather="image"></i></div>
        <div class="stat-info">
            <h3>Portfolio Items</h3>
            <p>{{ $stats['portfolio'] ?? 0 }}</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon"><i data-feather="edit-3"></i></div>
        <div class="stat-info">
            <h3>Blog Posts</h3>
            <p>{{ $stats['blogs'] ?? 0 }}</p>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon"><i data-feather="calendar"></i></div>
        <div class="stat-info">
            <h3>Appointments</h3>
            <p>{{ $stats['appointments'] ?? 0 }}</p>
        </div>
    </div>
</div>

<div class="recent-activity">
    <div class="card-header">
        <h2>Quick Actions</h2>
    </div>
    <div style="display: flex; gap: 15px; flex-wrap: wrap;">
        <a href="{{ route('admin.services.index') }}" class="btn btn-outline"><i data-feather="plus" style="width: 14px; margin-right: 5px;"></i> Add Service</a>
        <a href="{{ route('admin.portfolio.items.index') }}" class="btn btn-outline"><i data-feather="plus" style="width: 14px; margin-right: 5px;"></i> Add Portfolio Item</a>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-outline"><i data-feather="plus" style="width: 14px; margin-right: 5px;"></i> Write Blog</a>
        <a href="{{ route('admin.appointments.index') }}" class="btn btn-gold btn-sm" style="display: flex; align-items: center;"><i data-feather="eye" style="width: 14px; margin-right: 5px;"></i> View Appointments</a>
    </div>
</div>
@endsection
