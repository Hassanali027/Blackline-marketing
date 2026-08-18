<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;

class AdminServicePricingController extends Controller
{
    private function getHeader($service)
    {
        return $service->pricing_header ?? [
            'heading' => 'Our Packages',
            'highlight' => 'Packages',
            'description' => 'Select a plan that works best for you.'
        ];
    }

    private function getPlans($service)
    {
        return $service->pricing ?? [];
    }

    public function index($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $header = $this->getHeader($service);
        $plans = $this->getPlans($service);
        return view('admin.service-pricing.index', compact('header', 'plans', 'slug'));
    }

    public function create($slug)
    {
        return view('admin.service-pricing.form', compact('slug'));
    }

    public function store(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|string|max:100',
            'price_small' => 'nullable|string|max:50',
            'btn_text' => 'required|string|max:100',
            'btn_link' => 'required|string|max:255',
            'bullets' => 'required|string',
            'best_for' => 'nullable|string',
            'badge_text' => 'nullable|string|max:50'
        ]);

        $plans = $this->getPlans($service);

        $plans[] = [
            'id' => Str::uuid()->toString(),
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'price_small' => $request->price_small,
            'btn_text' => $request->btn_text,
            'btn_link' => $request->btn_link,
            'bullets' => $request->bullets,
            'best_for' => $request->best_for,
            'badge_text' => $request->badge_text
        ];

        $service->update(['pricing' => array_values($plans)]);

        return redirect()->route('admin.services.pricing.index', $slug)->with('success', 'Pricing plan added successfully!');
    }

    public function edit($slug, $id)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $plans = $this->getPlans($service);
        $planIndex = collect($plans)->search(function ($item) use ($id) {
            return (string)$item['id'] === (string)$id;
        });

        if ($planIndex === false) {
            return redirect()->route('admin.services.pricing.index', $slug)->withErrors('Pricing plan not found.');
        }

        $plan = $plans[$planIndex];
        return view('admin.service-pricing.form', compact('plan', 'slug'));
    }

    public function update(Request $request, $slug, $id)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|string|max:100',
            'price_small' => 'nullable|string|max:50',
            'btn_text' => 'required|string|max:100',
            'btn_link' => 'required|string|max:255',
            'bullets' => 'required|string',
            'best_for' => 'nullable|string',
            'badge_text' => 'nullable|string|max:50'
        ]);

        $plans = $this->getPlans($service);
        $planIndex = collect($plans)->search(function ($item) use ($id) {
            return (string)$item['id'] === (string)$id;
        });

        if ($planIndex === false) {
            return redirect()->route('admin.services.pricing.index', $slug)->withErrors('Pricing plan not found.');
        }

        $plans[$planIndex] = array_merge($plans[$planIndex], [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'price_small' => $request->price_small,
            'btn_text' => $request->btn_text,
            'btn_link' => $request->btn_link,
            'bullets' => $request->bullets,
            'best_for' => $request->best_for,
            'badge_text' => $request->badge_text
        ]);

        $service->update(['pricing' => array_values($plans)]);

        return redirect()->route('admin.services.pricing.index', $slug)->with('success', 'Pricing plan updated successfully!');
    }

    public function destroy($slug, $id)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $plans = $this->getPlans($service);
        
        $plans = collect($plans)->reject(function ($item) use ($id) {
            return (string)$item['id'] === (string)$id;
        })->toArray();

        $service->update(['pricing' => array_values($plans)]);

        return redirect()->route('admin.services.pricing.index', $slug)->with('success', 'Pricing plan deleted successfully!');
    }
}
