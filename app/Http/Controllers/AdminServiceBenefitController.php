<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;

class AdminServiceBenefitController extends Controller
{
    private function getHeader($service)
    {
        return $service->benefits_header ?? [
            'heading' => 'What We Can Do for Your Brand',
            'description' => 'A strategic presence built to create attention, influence, and measurable growth.'
        ];
    }

    private function getBenefits($service)
    {
        return $service->benefits ?? [];
    }

    public function index($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $header = $this->getHeader($service);
        $benefits = $this->getBenefits($service);
        return view('admin.service-benefits.index', compact('header', 'benefits', 'slug'));
    }

    public function create($slug)
    {
        return view('admin.service-benefits.form', compact('slug'));
    }

    public function store(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|image|max:5000'
        ]);

        $benefits = $this->getBenefits($service);

        $iconPath = '';
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/service'), $filename);
            $iconPath = 'images/service/' . $filename;
        }

        $benefits[] = [
            'id' => Str::uuid()->toString(),
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $iconPath
        ];

        $service->update(['benefits' => array_values($benefits)]);

        return redirect()->route('admin.services.benefits.index', $slug)->with('success', 'Benefit added successfully!');
    }

    public function edit($slug, $id)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $benefits = $this->getBenefits($service);
        
        $benefitIndex = collect($benefits)->search(function ($item) use ($id) {
            return (string)$item['id'] === (string)$id;
        });

        if ($benefitIndex === false) {
            return redirect()->route('admin.services.benefits.index', $slug)->withErrors('Benefit not found.');
        }

        $benefit = $benefits[$benefitIndex];
        return view('admin.service-benefits.form', compact('benefit', 'slug'));
    }

    public function update(Request $request, $slug, $id)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|max:5000'
        ]);

        $benefits = $this->getBenefits($service);
        $benefitIndex = collect($benefits)->search(function ($item) use ($id) {
            return (string)$item['id'] === (string)$id;
        });

        if ($benefitIndex === false) {
            return redirect()->route('admin.services.benefits.index', $slug)->withErrors('Benefit not found.');
        }

        $benefits[$benefitIndex]['title'] = $request->title;
        $benefits[$benefitIndex]['description'] = $request->description;

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/service'), $filename);
            $benefits[$benefitIndex]['icon'] = 'images/service/' . $filename;
        }

        $service->update(['benefits' => array_values($benefits)]);

        return redirect()->route('admin.services.benefits.index', $slug)->with('success', 'Benefit updated successfully!');
    }

    public function destroy($slug, $id)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $benefits = $this->getBenefits($service);
        
        $benefits = collect($benefits)->reject(function ($item) use ($id) {
            return (string)$item['id'] === (string)$id;
        })->toArray();

        $service->update(['benefits' => array_values($benefits)]);

        return redirect()->route('admin.services.benefits.index', $slug)->with('success', 'Benefit deleted successfully!');
    }
}
