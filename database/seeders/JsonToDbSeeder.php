<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JsonToDbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Settings
        if (\Illuminate\Support\Facades\File::exists(storage_path('app/home_hero.json'))) {
            $heroSettings = json_decode(\Illuminate\Support\Facades\File::get(storage_path('app/home_hero.json')), true);
            \App\Models\Setting::updateOrCreate(['key' => 'home_hero'], ['value' => $heroSettings]);
        }

        // 2. Case Studies
        if (\Illuminate\Support\Facades\File::exists(storage_path('app/home_case_studies.json'))) {
            $studies = json_decode(\Illuminate\Support\Facades\File::get(storage_path('app/home_case_studies.json')), true);
            foreach ($studies as $study) {
                \App\Models\CaseStudy::updateOrCreate(['id' => $study['id']], [
                    'title' => $study['title'] ?? '',
                    'metric' => $study['metric'] ?? '',
                    'description' => $study['description'] ?? '',
                    'video' => $study['video'] ?? null,
                    'btn_text' => $study['btn_text'] ?? '',
                    'btn_link' => $study['btn_link'] ?? '',
                ]);
            }
        }

        // 3. Feedback
        if (\Illuminate\Support\Facades\File::exists(storage_path('app/home_feedbacks.json'))) {
            $feedbacks = json_decode(\Illuminate\Support\Facades\File::get(storage_path('app/home_feedbacks.json')), true);
            foreach ($feedbacks as $fb) {
                \App\Models\Feedback::updateOrCreate(['id' => $fb['id']], [
                    'name' => $fb['name'] ?? '',
                    'role' => $fb['role'] ?? '',
                    'description' => $fb['description'] ?? '',
                    'logo' => $fb['logo'] ?? null,
                    'video' => $fb['video'] ?? null,
                ]);
            }
        }

        // 4. Services
        if (\Illuminate\Support\Facades\File::exists(storage_path('app/services.json'))) {
            $servicesIndex = json_decode(\Illuminate\Support\Facades\File::get(storage_path('app/services.json')), true);
            foreach ($servicesIndex as $idx) {
                $slug = $idx['slug'];
                $detailPath = storage_path('app/services/' . $slug . '.json');
                $detail = [];
                if (\Illuminate\Support\Facades\File::exists($detailPath)) {
                    $detail = json_decode(\Illuminate\Support\Facades\File::get($detailPath), true);
                }

                \App\Models\Service::updateOrCreate(['id' => $idx['id']], [
                    'title' => $idx['title'] ?? ($detail['title'] ?? ''),
                    'slug' => $slug,
                    'hero' => $detail['hero'] ?? null,
                    'overview' => $detail['overview'] ?? null,
                    'benefits_header' => $detail['benefits_header'] ?? null,
                    'benefits' => $detail['benefits'] ?? null,
                    'process_header' => $detail['process_header'] ?? null,
                    'process' => $detail['process'] ?? null,
                    'pricing_header' => $detail['pricing_header'] ?? null,
                    'pricing' => $detail['pricing'] ?? null,
                ]);
            }
        }
        // 5. Portfolio Items
        $portfolioItems = [
            [
                'id' => '00000000-0000-0000-0000-000000000001',
                'title' => 'McLaren Golf',
                'description' => 'High-performance engineered eCommerce experience.',
                'image' => 'assets/portfolio/mclaren-golf.png',
                'btn_text' => 'View Work',
                'btn_link' => '#',
                'industry' => 'web'
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000002',
                'title' => 'Natare',
                'description' => 'Highest quality stainless steel pools.',
                'image' => 'assets/portfolio/natare.png',
                'btn_text' => 'View Work',
                'btn_link' => '#',
                'industry' => 'web'
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000003',
                'title' => 'Colorado Rafting',
                'description' => 'Experience the adventure.',
                'image' => 'assets/portfolio/colorado-rafting.png',
                'btn_text' => 'View Work',
                'btn_link' => '#',
                'industry' => 'web'
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000004',
                'title' => 'Imagine Software',
                'description' => 'Technology reimagined.',
                'image' => 'assets/portfolio/imagine-software.png',
                'btn_text' => 'View Work',
                'btn_link' => '#',
                'industry' => 'brand'
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000005',
                'title' => 'Night of Mystery',
                'description' => 'Can you solve the mystery?',
                'image' => 'assets/portfolio/night-of-mystery.png',
                'btn_text' => 'View Work',
                'btn_link' => '#',
                'industry' => 'brand'
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000006',
                'title' => 'Lantech',
                'description' => 'We transformed the machines.',
                'image' => 'assets/portfolio/lantech.png',
                'btn_text' => 'View Work',
                'btn_link' => '#',
                'industry' => 'web'
            ]
        ];

        foreach ($portfolioItems as $item) {
            \App\Models\PortfolioItem::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
