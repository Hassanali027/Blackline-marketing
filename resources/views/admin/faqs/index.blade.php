@extends('admin.layouts.app')

@section('content')
<div class="admin-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <div>
        <h1>FAQs Settings</h1>
        <p>Manage the global FAQs and page-specific assignments.</p>
    </div>
    <a href="{{ route('admin.faqs.create') }}" class="btn-gold" style="text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
        <i data-feather="plus"></i> Add FAQ
    </a>
</div>

@if (session('success'))
<div class="alert" style="background: rgba(76, 175, 80, 0.1); border: 1px solid #4CAF50; color: #4CAF50; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
    {{ session('success') }}
</div>
@endif

<div class="admin-card">
    <div class="table-responsive">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Question</th>
                    <th>Assigned Pages</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($faqs as $faq)
                <tr>
                    <td>
                        <span class="badge" style="background: rgba(229, 202, 131, 0.15); color: var(--gold); border: 1px solid rgba(229, 202, 131, 0.3); padding: 4px 10px; border-radius: 99px; font-size: 12px; font-weight: 600;">
                            {{ $faq->category ?: 'General' }}
                        </span>
                    </td>
                    <td>
                        <strong style="color: #fff; font-size: 16px;">{{ $faq->question }}</strong>
                    </td>
                    <td>
                        @if($faq->pages)
                            @foreach($faq->pages as $page)
                                <span class="badge" style="background: rgba(255, 255, 255, 0.1); color: #fff; padding: 3px 8px; border-radius: 4px; font-size: 11px; margin-right: 4px;">{{ ucfirst(str_replace('-', ' ', $page)) }}</span>
                            @endforeach
                        @else
                            <span style="color: var(--muted); font-size: 12px;">None</span>
                        @endif
                    </td>
                    <td>
                        <div class="action-buttons" style="display: flex; gap: 10px;">
                            <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn-icon" title="Edit" style="color: var(--gold); background: rgba(229, 202, 131, 0.1); padding: 8px; border-radius: 6px; display: inline-flex; transition: all 0.2s ease;">
                                <i data-feather="edit-2" style="width: 16px; height: 16px;"></i>
                            </a>
                            <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this FAQ?');" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-icon" title="Delete" style="color: #F44336; background: rgba(244, 67, 54, 0.1); border: none; padding: 8px; border-radius: 6px; display: inline-flex; cursor: pointer; transition: all 0.2s ease;">
                                    <i data-feather="trash-2" style="width: 16px; height: 16px;"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="text-align: center; padding: 40px 20px; color: var(--muted);">
                        <i data-feather="help-circle" style="width: 48px; height: 48px; opacity: 0.5; margin-bottom: 15px;"></i>
                        <p>No FAQs added yet.</p>
                        <a href="{{ route('admin.faqs.create') }}" style="color: var(--gold); text-decoration: underline;">Add your first FAQ</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
