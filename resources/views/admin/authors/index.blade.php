@extends('admin.layouts.app')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <h2>Authors Management</h2>
    <a href="{{ route('admin.authors.create') }}" class="btn btn-gold">Add New Author</a>
</div>

@if(session('success'))
    <div style="background: rgba(46, 213, 115, 0.1); color: #2ed573; padding: 15px; border-radius: 8px; margin-bottom: 20px; border: 1px solid rgba(46,213,115,0.2);">
        {{ session('success') }}
    </div>
@endif

<div class="admin-card" style="padding: 0;">
    <div style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <th style="padding: 20px; text-align: left; color: var(--muted); font-weight: 500;">Picture</th>
                    <th style="padding: 20px; text-align: left; color: var(--muted); font-weight: 500;">Name</th>
                    <th style="padding: 20px; text-align: left; color: var(--muted); font-weight: 500;">Social Links</th>
                    <th style="padding: 20px; text-align: right; color: var(--muted); font-weight: 500;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($authors as $author)
                <tr style="border-bottom: 1px solid rgba(255,255,255,0.02);">
                    <td style="padding: 20px;">
                        @if($author->picture)
                            <img src="{{ asset($author->picture) }}" alt="{{ $author->name }}" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;">
                        @else
                            <div style="width: 50px; height: 50px; border-radius: 50%; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; font-weight: bold; color: var(--gold);">
                                {{ strtoupper(substr($author->name, 0, 1)) }}
                            </div>
                        @endif
                    </td>
                    <td style="padding: 20px; color: #fff;">{{ $author->name }}</td>
                    <td style="padding: 20px;">
                        @if($author->linkedin_url)
                            <a href="{{ $author->linkedin_url }}" target="_blank" style="color: var(--gold); margin-right: 10px;">LinkedIn</a>
                        @endif
                        @if($author->twitter_url)
                            <a href="{{ $author->twitter_url }}" target="_blank" style="color: #1da1f2;">Twitter</a>
                        @endif
                    </td>
                    <td style="padding: 20px; text-align: right;">
                        <a href="{{ route('admin.authors.edit', $author->id) }}" class="btn btn-gold" style="padding: 8px 15px; font-size: 13px; background: rgba(229, 202, 131, 0.1); border: 1px solid var(--gold); color: var(--gold); margin-right: 10px;">Edit</a>
                        <form action="{{ route('admin.authors.destroy', $author->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this author?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" style="padding: 8px 15px; font-size: 13px; background: rgba(255, 71, 87, 0.1); border: 1px solid #ff4757; color: #ff4757;">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="padding: 40px 20px; text-align: center; color: var(--muted);">No authors found. Add one to get started!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
