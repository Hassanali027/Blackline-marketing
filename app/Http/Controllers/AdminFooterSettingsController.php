<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminFooterSettingsController extends Controller
{
    public function edit()
    {
        $settings = Setting::whereIn('key', [
            'footer_description',
            'footer_useful_links',
            'footer_facebook',
            'footer_twitter',
            'footer_instagram',
            'footer_linkedin',
            'footer_youtube'
        ])->pluck('value', 'key');

        $services = Service::all();

        return view('admin.footer-settings.edit', compact('settings', 'services'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'footer_description' => 'nullable|string',
            'footer_useful_links' => 'nullable|array',
            'footer_facebook' => 'nullable|url',
            'footer_twitter' => 'nullable|url',
            'footer_instagram' => 'nullable|url',
            'footer_linkedin' => 'nullable|url',
            'footer_youtube' => 'nullable|url',
            'services' => 'nullable|array'
        ]);

        $keys = [
            'footer_description',
            'footer_useful_links',
            'footer_facebook',
            'footer_twitter',
            'footer_instagram',
            'footer_linkedin',
            'footer_youtube'
        ];

        foreach ($keys as $key) {
            $val = $request->input($key);
            Setting::updateOrCreate(
                ['key' => $key],
                // Follow the double encoding logic of AdminContactSettingsController just in case
                ['value' => is_array($val) ? json_encode($val) : json_encode((string)$val)]
            );
        }

        // Update services show_in_footer
        Service::query()->update(['show_in_footer' => false]);
        if ($request->has('services')) {
            Service::whereIn('id', $request->input('services'))->update(['show_in_footer' => true]);
        }

        return redirect()->back()->with('success', 'Footer settings updated successfully.');
    }
}
