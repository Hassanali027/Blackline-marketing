@extends('admin.layouts.app')

@section('content')
<div class="dashboard-header">
    <h1>Welcome back, {{ session('admin_name', 'Admin') }}</h1>
    <p>Here's what's happening with your website today.</p>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-icon"><i data-feather="users"></i></div>
        <div class="stat-info">
            <h3>Total Visitors</h3>
            <p>12,450</p>
            <span class="trend positive"><i data-feather="trending-up"></i> +14%</span>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon"><i data-feather="eye"></i></div>
        <div class="stat-info">
            <h3>Page Views</h3>
            <p>45,210</p>
            <span class="trend positive"><i data-feather="trending-up"></i> +22%</span>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon"><i data-feather="message-square"></i></div>
        <div class="stat-info">
            <h3>Inquiries</h3>
            <p>128</p>
            <span class="trend negative"><i data-feather="trending-down"></i> -5%</span>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon"><i data-feather="activity"></i></div>
        <div class="stat-info">
            <h3>Active Sessions</h3>
            <p>42</p>
            <span class="trend positive"><i data-feather="trending-up"></i> +2%</span>
        </div>
    </div>
</div>

<div class="recent-activity">
    <div class="card-header">
        <h2>Recent Activity</h2>
        <button class="btn btn-outline">View All</button>
    </div>
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>User / IP</th>
                    <th>Action</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>192.168.1.1</td>
                    <td>Submitted Contact Form</td>
                    <td>2 mins ago</td>
                    <td><span class="badge badge-success">Success</span></td>
                </tr>
                <tr>
                    <td>admin@blackline.com</td>
                    <td>Updated 'Services' Page</td>
                    <td>1 hour ago</td>
                    <td><span class="badge badge-info">Modified</span></td>
                </tr>
                <tr>
                    <td>10.0.0.5</td>
                    <td>Viewed Case Study #2</td>
                    <td>3 hours ago</td>
                    <td><span class="badge badge-success">Success</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
