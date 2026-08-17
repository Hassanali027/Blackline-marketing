<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class AdminContactSettingsController extends Controller
{
    public function edit()
    {
        $settings = Setting::whereIn('key', [
            'contact_phone',
            'contact_email',
            'contact_address',
            'contact_facebook',
            'contact_twitter',
            'contact_instagram',
            'contact_youtube'
        ])->pluck('value', 'key');

        return view('admin.contact-settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'contact_phone' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_address' => 'nullable|string',
            'contact_facebook' => 'nullable|url',
            'contact_twitter' => 'nullable|url',
            'contact_instagram' => 'nullable|url',
            'contact_youtube' => 'nullable|url',
        ]);

        $keys = [
            'contact_phone',
            'contact_email',
            'contact_address',
            'contact_facebook',
            'contact_twitter',
            'contact_instagram',
            'contact_youtube'
        ];

        foreach ($keys as $key) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => json_encode($request->input($key))]
            );
        }

        return redirect()->back()->with('success', 'Contact settings updated successfully.');
    }
}
