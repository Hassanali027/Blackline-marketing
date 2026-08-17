@extends('admin.layouts.app')

@section('content')
<div class="admin-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
    <div>
        <h1>Appointments</h1>
        <p>View and manage all client discovery calls booked from the frontend widget.</p>
    </div>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Business Website</th>
                    <th>Scheduled Date</th>
                    <th>Time Slot</th>
                    <th>Notes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($appointments as $appointment)
                <tr>
                    <td>
                        <strong style="color: #fff; font-size: 15px;">{{ $appointment->first_name }} {{ $appointment->last_name }}</strong>
                    </td>
                    <td>
                        <span style="color: #ccc;">{{ $appointment->email }}</span>
                    </td>
                    <td>
                        @if($appointment->website)
                            <a href="{{ $appointment->website }}" target="_blank" style="color: var(--gold); text-decoration: underline;">{{ $appointment->website }}</a>
                        @else
                            <span style="color: var(--muted); font-size: 12px;">N/A</span>
                        @endif
                    </td>
                    <td>
                        <span class="badge" style="background: rgba(229, 202, 131, 0.15); color: var(--gold); border: 1px solid rgba(229, 202, 131, 0.3); padding: 4px 10px; border-radius: 99px; font-size: 12px; font-weight: 600;">
                            {{ \Carbon\Carbon::parse($appointment->date)->format('F d, Y') }}
                        </span>
                    </td>
                    <td>
                        <span class="badge" style="background: rgba(255, 255, 255, 0.1); color: #fff; padding: 4px 10px; border-radius: 4px; font-size: 12px;">
                            {{ $appointment->time_slot }}
                        </span>
                    </td>
                    <td style="max-width: 200px; white-space: normal; color: #aaa; font-size: 13px;">
                        {{ $appointment->notes ?: 'No notes provided' }}
                    </td>
                    <td>
                        <div class="action-buttons" style="display: flex; gap: 10px;">
                            <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to cancel and delete this appointment?');" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-icon" title="Cancel/Delete" style="color: #F44336; background: rgba(244, 67, 54, 0.1); border: none; padding: 8px; border-radius: 6px; display: inline-flex; cursor: pointer; transition: all 0.2s ease;">
                                    <i data-feather="trash-2" style="width: 16px; height: 16px;"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center; padding: 40px 20px; color: var(--muted);">
                        <i data-feather="calendar" style="width: 48px; height: 48px; opacity: 0.5; margin-bottom: 15px;"></i>
                        <p>No appointments booked yet.</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @if($appointments->hasPages())
    <div style="margin-top: 20px; padding: 15px 0;">
        {{ $appointments->links() }}
    </div>
    @endif
</div>
@endsection
