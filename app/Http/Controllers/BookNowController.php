<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;

class BookNowController extends Controller
{
    public function index()
    {
        // Get all booked appointments grouped by date
        $bookedSlots = Appointment::select('date', 'time_slot')
            ->get()
            ->groupBy('date')
            ->map(function($items) {
                return $items->pluck('time_slot');
            });

        return view('booknow', compact('bookedSlots'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
            'date' => 'required|date_format:Y-m-d',
            'time_slot' => 'required|string|max:50',
        ]);

        // Double booking check
        $exists = Appointment::where('date', $request->date)
            ->where('time_slot', $request->time_slot)
            ->exists();

        if ($exists) {
            return response()->json([
                'success' => false,
                'message' => 'This slot is already booked. Please choose another time.'
            ], 422);
        }

        Appointment::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Appointment scheduled successfully.'
        ]);
    }
}
