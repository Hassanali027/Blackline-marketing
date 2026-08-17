@extends('admin.layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h2>Manage Blogs</h2>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-gold">Add Blog Post</a>
</div>

@if(session('success'))
    <div style="background: rgba(40, 167, 69, 0.1); color: #28a745; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(40,167,69,0.2);">
        {{ session('success') }}
    </div>
@endif

<div class="admin-card">
    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; color: #fff;">
            <thead>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <th style="padding: 15px; text-align: left;">Image</th>
                    <th style="padding: 15px; text-align: left;">Title</th>
                    <th style="padding: 15px; text-align: left;">Category</th>
                    <th style="padding: 15px; text-align: left;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $blog)
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <td style="padding: 15px;">
                        @if($blog->image)
                            <img src="{{ asset($blog->image) }}" alt="Blog Image" style="width: 80px; height: 50px; object-fit: cover; border-radius: 4px;">
                        @else
                            <span style="color: var(--muted);">No Image</span>
                        @endif
                    </td>
                    <td style="padding: 15px; font-weight: 500;">{{ $blog->title }}</td>
                    <td style="padding: 15px; color: var(--gold);">{{ $blog->category }}</td>
                    <td style="padding: 15px;">
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" style="color: #fff; text-decoration: none; margin-right: 15px; font-size: 14px;">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this blog post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background: none; border: none; color: #ff4757; cursor: pointer; font-size: 14px; padding: 0;">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="padding: 30px 15px; text-align: center; color: var(--muted);">No blog posts found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
