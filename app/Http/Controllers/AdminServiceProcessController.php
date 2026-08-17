<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;

class AdminServiceProcessController extends Controller
{
    private function getHeader($service)
    {
        return $service->process_header ?? [
            'subheading' => 'PROCESS',
            'heading' => 'Our Workflow'
        ];
    }

    private function getItems($service)
    {
        return $service->process ?? [];
    }

    public function index($slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $header = $this->getHeader($service);
        $items = $this->getItems($service);
        return view('admin.service-process.index', compact('header', 'items', 'slug'));
    }

    public function create($slug)
    {
        return view('admin.service-process.form', compact('slug'));
    }

    public function store(Request $request, $slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|file|max:5000'
        ]);

        $items = $this->getItems($service);

        $iconPath = '';
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/service'), $filename);
            $iconPath = 'images/service/' . $filename;
        }

        $items[] = [
            'id' => Str::uuid()->toString(),
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $iconPath
        ];

        $service->update(['process' => array_values($items)]);

        return redirect()->route('admin.services.process.index', $slug)->with('success', 'Process item added successfully!');
    }

    public function edit($slug, $id)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $items = $this->getItems($service);
        
        $itemIndex = collect($items)->search(function ($item) use ($id) {
            return (string)$item['id'] === (string)$id;
        });

        if ($itemIndex === false) {
            return redirect()->route('admin.services.process.index', $slug)->withErrors('Process item not found.');
        }

        $processItem = $items[$itemIndex];
        return view('admin.service-process.form', compact('processItem', 'slug'));
    }

    public function update(Request $request, $slug, $id)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|file|max:5000'
        ]);

        $items = $this->getItems($service);
        $itemIndex = collect($items)->search(function ($item) use ($id) {
            return (string)$item['id'] === (string)$id;
        });

        if ($itemIndex === false) {
            return redirect()->route('admin.services.process.index', $slug)->withErrors('Process item not found.');
        }

        $items[$itemIndex]['title'] = $request->title;
        $items[$itemIndex]['description'] = $request->description;

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/service'), $filename);
            $items[$itemIndex]['icon'] = 'images/service/' . $filename;
        }

        $service->update(['process' => array_values($items)]);

        return redirect()->route('admin.services.process.index', $slug)->with('success', 'Process item updated successfully!');
    }

    public function destroy($slug, $id)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        $items = $this->getItems($service);
        
        $items = collect($items)->reject(function ($item) use ($id) {
            return (string)$item['id'] === (string)$id;
        })->toArray();

        $service->update(['process' => array_values($items)]);

        return redirect()->route('admin.services.process.index', $slug)->with('success', 'Process item deleted successfully!');
    }
}
