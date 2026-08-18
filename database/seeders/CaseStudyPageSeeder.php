<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CaseStudyPage;
use App\Models\PortfolioItem;

class CaseStudyPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $caseStudies = [
            // 1. McLaren Golf
            [
                'id' => '00000000-0000-0000-0000-000000000001',
                'title' => 'McLaren Golf',
                'slug' => 'mclaren-golf',
                'hero' => [
                    'badge' => 'ECOMMERCE & WEB',
                    'heading' => 'McLaren Golf',
                    'description' => 'High-Performance Engineered eCommerce Experience.',
                    'image' => 'assets/portfolio/mclaren-golf.png',
                ],
                'challenge' => [
                    'heading' => 'Engineering a Digital Experience Worthy of High-Performance Golf.',
                    'description' => 'McLaren Golf needed an eCommerce ecosystem that matched the precision engineering and luxury reputation of their premium equipment line. The previous online touchpoint suffered from high cart abandonment and failed to communicate elite craftsmanship.',
                    'image' => 'images/work-meridian.jpg',
                    'points' => [
                        [
                            'title' => 'Suboptimal Conversion Funnel',
                            'description' => 'Complex checkout journeys caused drop-offs among high-net-worth golfers looking for seamless purchase experiences.',
                        ],
                        [
                            'title' => 'Brand Perception Mismatch',
                            'description' => 'The digital interface lacked the high-end tactile feel and prestige of physical luxury golf equipment.',
                        ],
                        [
                            'title' => 'Mobile Performance Drag',
                            'description' => 'Slow page load times degraded engagement among affluent buyers shopping from smartphones on golf courses.',
                        ],
                        [
                            'title' => 'Fragmented Global Catalog',
                            'description' => 'International distribution channels required synchronized multi-currency support and regional inventory tracking.',
                        ],
                    ],
                ],
                'strategy' => [
                    'heading' => 'Precision Architecture & Bespoke Storytelling.',
                    'description_1' => 'We re-architected McLaren Golf’s digital flagship from the ground up, implementing high-speed headless commerce, immersive 3D product renders, and streamlined single-click checkout funnels.',
                    'description_2' => 'Every interaction was calibrated to feel effortless, opulent, and technical. Dynamic custom club configuration tools allowed customers to personalize their gear with live visual feedback.',
                    'image' => 'assets/portfolio/mclaren-golf.png',
                ],
                'work_motion' => [
                    'heading' => 'Engineered Precision in Action.',
                    'image_1' => 'images/left.jpg',
                    'image_2' => 'images/e3daa32d63e4b525d4d953d43fca4bac8663a408.jpg',
                    'image_3' => 'images/75380b79c3a2b132c49c08f7ba4bf3c2cef763d7.jpg',
                    'image_4' => 'images/ce777daf76ee5541c189407447390a60a69f9148.jpg',
                    'image_5' => 'images/6b43bbe1f1ef199886ab7fc8478b9fa2e9bec8c0.jpg',
                    'image_6' => 'images/3e21a292ef2acb2f4638dacec719d43784164505.jpg',
                ],
                'video' => [
                    'thumbnail' => 'assets/portfolio/mclaren-golf.png',
                    'video_file' => '',
                ],
            ],

            // 2. Natare
            [
                'id' => '00000000-0000-0000-0000-000000000002',
                'title' => 'Natare',
                'slug' => 'natare',
                'hero' => [
                    'badge' => 'INDUSTRIAL & LUXURY AQUATICS',
                    'heading' => 'Natare',
                    'description' => 'Highest Quality Stainless Steel Pools & Commercial Aquatic Systems.',
                    'image' => 'assets/portfolio/natare.png',
                ],
                'challenge' => [
                    'heading' => 'Elevating Industrial Commercial Aquatics to Modern Architectural Luxury.',
                    'description' => 'Natare is the global benchmark for Olympic-grade stainless steel pools and resort aquatic engineering. However, their digital footprint was outdated, making it difficult for luxury architects, hotel developers, and municipal planners to visualize project possibilities.',
                    'image' => 'images/work-meridian.jpg',
                    'points' => [
                        [
                            'title' => 'Technical Complexity Barrier',
                            'description' => 'Architects struggled to navigate complex engineering specs without interactive visualization.',
                        ],
                        [
                            'title' => 'High-Value B2B Lead Cycle',
                            'description' => 'Long sales cycles required high-trust proof points and interactive portfolio showcases.',
                        ],
                        [
                            'title' => 'Global Developer Reach',
                            'description' => 'Resort developers in Dubai and Europe needed direct access to regional project case studies.',
                        ],
                        [
                            'title' => 'Brand Authority Refresh',
                            'description' => 'Positioning needed to bridge industrial engineering durability with ultra-luxury aesthetic design.',
                        ],
                    ],
                ],
                'strategy' => [
                    'heading' => 'Modernizing Aquatic Architecture Showcase.',
                    'description_1' => 'We designed a clean, architectural digital platform that highlights mega-projects across Olympic facilities, luxury rooftop infinity pools, and world-class resort water parks.',
                    'description_2' => 'We integrated interactive engineering calculators, downloadable CAD specification portals for architects, and high-resolution video case studies demonstrating turnkey installation excellence.',
                    'image' => 'assets/portfolio/natare.png',
                ],
                'work_motion' => [
                    'heading' => 'Aquatic Innovation Showcase.',
                    'image_1' => 'images/left.jpg',
                    'image_2' => 'images/e3daa32d63e4b525d4d953d43fca4bac8663a408.jpg',
                    'image_3' => 'images/75380b79c3a2b132c49c08f7ba4bf3c2cef763d7.jpg',
                    'image_4' => 'images/ce777daf76ee5541c189407447390a60a69f9148.jpg',
                    'image_5' => 'images/6b43bbe1f1ef199886ab7fc8478b9fa2e9bec8c0.jpg',
                    'image_6' => 'images/3e21a292ef2acb2f4638dacec719d43784164505.jpg',
                ],
                'video' => [
                    'thumbnail' => 'assets/portfolio/natare.png',
                    'video_file' => '',
                ],
            ],

            // 3. Colorado Rafting
            [
                'id' => '00000000-0000-0000-0000-000000000003',
                'title' => 'Colorado Rafting',
                'slug' => 'colorado-rafting',
                'hero' => [
                    'badge' => 'ADVENTURE & HOSPITALITY',
                    'heading' => 'Colorado Rafting',
                    'description' => 'Experience the Adventure of World-Class Whitewater Expeditions.',
                    'image' => 'assets/portfolio/colorado-rafting.png',
                ],
                'challenge' => [
                    'heading' => 'Scaling Direct Bookings for Peak Whitewater Season.',
                    'description' => 'Colorado Rafting delivers unforgettable whitewater expeditions across the Rocky Mountains. Despite rave reviews, their booking platform caused friction on mobile devices, resulting in lost bookings to regional aggregator platforms that charged heavy commission fees.',
                    'image' => 'images/work-meridian.jpg',
                    'points' => [
                        [
                            'title' => 'Aggregator Dependency',
                            'description' => 'High reliance on third-party travel platforms cut heavily into expedition profit margins.',
                        ],
                        [
                            'title' => 'Mobile Booking Drop-off',
                            'description' => 'Adventurers booking from phones while traveling experienced slow checkout friction.',
                        ],
                        [
                            'title' => 'Seasonal Demand Surges',
                            'description' => 'Needed targeted pre-season ad blitzes to sell out high-tier private river charters.',
                        ],
                        [
                            'title' => 'Content Monetization',
                            'description' => 'Visual excitement of river rapids was underutilized across advertising channels.',
                        ],
                    ],
                ],
                'strategy' => [
                    'heading' => 'Immersive Visuals & Frictionless Reservation Engine.',
                    'description_1' => 'We overhauled the entire expedition booking flow, creating a 3-step mobile reservation system integrated with live weather, river class indicators, and instant group scheduling.',
                    'description_2' => 'We launched dynamic GoPro and drone action campaign creative across Meta and TikTok, targeting adventure travelers and vacationing families with hyper-targeted geo-fencing.',
                    'image' => 'assets/portfolio/colorado-rafting.png',
                ],
                'work_motion' => [
                    'heading' => 'Pure Adrenaline & Natural Wonder.',
                    'image_1' => 'images/left.jpg',
                    'image_2' => 'images/e3daa32d63e4b525d4d953d43fca4bac8663a408.jpg',
                    'image_3' => 'images/75380b79c3a2b132c49c08f7ba4bf3c2cef763d7.jpg',
                    'image_4' => 'images/ce777daf76ee5541c189407447390a60a69f9148.jpg',
                    'image_5' => 'images/6b43bbe1f1ef199886ab7fc8478b9fa2e9bec8c0.jpg',
                    'image_6' => 'images/3e21a292ef2acb2f4638dacec719d43784164505.jpg',
                ],
                'video' => [
                    'thumbnail' => 'assets/portfolio/colorado-rafting.png',
                    'video_file' => '',
                ],
            ],

            // 4. Imagine Software
            [
                'id' => '00000000-0000-0000-0000-000000000004',
                'title' => 'Imagine Software',
                'slug' => 'imagine-software',
                'hero' => [
                    'badge' => 'SAAS & BRAND IDENTITY',
                    'heading' => 'Imagine Software',
                    'description' => 'Technology Reimagined for Enterprise Financial Analytics.',
                    'image' => 'assets/portfolio/imagine-software.png',
                ],
                'challenge' => [
                    'heading' => 'Transforming Complex FinTech Data into Intuitive Human Clarity.',
                    'description' => 'Imagine Software powers real-time portfolio risk analytics for tier-1 hedge funds and institutional banks. Their core technological capability was exceptional, but their legacy branding and interface looked outdated compared to modern cloud SaaS leaders.',
                    'image' => 'images/work-meridian.jpg',
                    'points' => [
                        [
                            'title' => 'Enterprise Trust Deficit',
                            'description' => 'Legacy visual design failed to reflect the bleeding-edge speed of their cloud engine.',
                        ],
                        [
                            'title' => 'Complex Value Proposition',
                            'description' => 'Prospects struggled to grasp deep quantitative modeling features from marketing copy.',
                        ],
                        [
                            'title' => 'Lengthy Procurement Cycle',
                            'description' => 'Sales collateral lacked the executive polish demanded by Chief Risk Officers.',
                        ],
                        [
                            'title' => 'Talent Recruitment',
                            'description' => 'Needed a prestigious tech brand identity to attract top-tier Silicon Valley software engineers.',
                        ],
                    ],
                ],
                'strategy' => [
                    'heading' => 'Unified Design Language & Enterprise Authority.',
                    'description_1' => 'We executed a complete brand transformation, developing a sleek dark-mode visual design system, custom vector financial iconography, and interactive feature dashboards.',
                    'description_2' => 'We crafted high-converting product demo landing pages and executive pitch playbooks that simplified complex risk algorithms into undeniable business value.',
                    'image' => 'assets/portfolio/imagine-software.png',
                ],
                'work_motion' => [
                    'heading' => 'The Architecture of Innovation.',
                    'image_1' => 'images/left.jpg',
                    'image_2' => 'images/e3daa32d63e4b525d4d953d43fca4bac8663a408.jpg',
                    'image_3' => 'images/75380b79c3a2b132c49c08f7ba4bf3c2cef763d7.jpg',
                    'image_4' => 'images/ce777daf76ee5541c189407447390a60a69f9148.jpg',
                    'image_5' => 'images/6b43bbe1f1ef199886ab7fc8478b9fa2e9bec8c0.jpg',
                    'image_6' => 'images/3e21a292ef2acb2f4638dacec719d43784164505.jpg',
                ],
                'video' => [
                    'thumbnail' => 'assets/portfolio/imagine-software.png',
                    'video_file' => '',
                ],
            ],

            // 5. Night of Mystery
            [
                'id' => '00000000-0000-0000-0000-000000000005',
                'title' => 'Night of Mystery',
                'slug' => 'night-of-mystery',
                'hero' => [
                    'badge' => 'ENTERTAINMENT & BRANDING',
                    'heading' => 'Night of Mystery',
                    'description' => 'Can You Solve the Mystery? Immersive Party Games & Digital Experiences.',
                    'image' => 'assets/portfolio/night-of-mystery.png',
                ],
                'challenge' => [
                    'heading' => 'Modernizing Murder Mystery Game Kits for the Digital Generation.',
                    'description' => 'Night of Mystery is a premier creator of customizable murder mystery party games for groups, corporate events, and celebrations. As consumer habits shifted to digital downloads and virtual parties, the brand needed an exciting visual revamp and automated digital delivery system.',
                    'image' => 'images/work-meridian.jpg',
                    'points' => [
                        [
                            'title' => 'Digital Download Confusion',
                            'description' => 'Customers needed instant access and clear instructions across multiple character roles.',
                        ],
                        [
                            'title' => 'Thematic Visual Inconsistency',
                            'description' => 'Different game eras (1920s Speakeasy vs. Victorian Manor) lacked distinctive branding.',
                        ],
                        [
                            'title' => 'Social Proof Utilization',
                            'description' => 'Thousands of customer costume photos and viral TikTok moments were uncurated.',
                        ],
                        [
                            'title' => 'Seasonal Spikes (Halloween)',
                            'description' => 'Needed ad infrastructure able to scale 10x during peak holiday entertaining windows.',
                        ],
                    ],
                ],
                'strategy' => [
                    'heading' => 'Cinematic Thematic Aesthetics & Instant Digital Delivery.',
                    'description_1' => 'We designed an atmospheric, vintage-inspired digital storefront where each mystery theme boasts bespoke typography, character cast previews, and Spotify playlist integrations.',
                    'description_2' => 'We engineered an instant download portal and automated post-purchase email onboarding with host preparation checklists and costume inspiration boards.',
                    'image' => 'assets/portfolio/night-of-mystery.png',
                ],
                'work_motion' => [
                    'heading' => 'Intrigue & Atmosphere in Motion.',
                    'image_1' => 'images/left.jpg',
                    'image_2' => 'images/e3daa32d63e4b525d4d953d43fca4bac8663a408.jpg',
                    'image_3' => 'images/75380b79c3a2b132c49c08f7ba4bf3c2cef763d7.jpg',
                    'image_4' => 'images/ce777daf76ee5541c189407447390a60a69f9148.jpg',
                    'image_5' => 'images/6b43bbe1f1ef199886ab7fc8478b9fa2e9bec8c0.jpg',
                    'image_6' => 'images/3e21a292ef2acb2f4638dacec719d43784164505.jpg',
                ],
                'video' => [
                    'thumbnail' => 'assets/portfolio/night-of-mystery.png',
                    'video_file' => '',
                ],
            ],

            // 6. Lantech
            [
                'id' => '00000000-0000-0000-0000-000000000006',
                'title' => 'Lantech',
                'slug' => 'lantech',
                'hero' => [
                    'badge' => 'INDUSTRIAL AUTOMATION & ROBOTICS',
                    'heading' => 'Lantech',
                    'description' => 'We Transformed the Machines: Global Packaging Automation & Robotics.',
                    'image' => 'assets/portfolio/lantech.png',
                ],
                'challenge' => [
                    'heading' => 'Translating Heavy Industrial Machinery into Smart IoT Automation.',
                    'description' => 'Lantech invented stretch wrapping machinery and revolutionized modern logistics packaging. In the Industry 4.0 era, they needed to communicate their evolution into AI-driven stretch wrapping, automated case handling, and cloud telemetry systems.',
                    'image' => 'images/work-meridian.jpg',
                    'points' => [
                        [
                            'title' => 'Legacy Machinery Stereotype',
                            'description' => 'Perceived strictly as hardware manufacturer rather than an advanced software & robotics leader.',
                        ],
                        [
                            'title' => 'Global Multi-Language Sales',
                            'description' => 'Distributors across 60+ countries needed localized product selectors and ROI calculators.',
                        ],
                        [
                            'title' => 'B2B Parts & Service Ordering',
                            'description' => 'Factory managers needed fast mobile lookup for spare parts and preventative maintenance.',
                        ],
                        [
                            'title' => 'Complex Sales Demos',
                            'description' => 'Needed high-definition interactive 3D machinery explainer models for global trade shows.',
                        ],
                    ],
                ],
                'strategy' => [
                    'heading' => 'Smart Industrial Precision & Global Lead Architecture.',
                    'description_1' => 'We designed a modern enterprise web portal highlighting machine telemetry, sustainability impact metrics (reduced plastic film usage), and interactive machinery configurators.',
                    'description_2' => 'We developed a global distributor portal and multi-channel performance campaign targeting factory automation directors and supply chain executives.',
                    'image' => 'assets/portfolio/lantech.png',
                ],
                'work_motion' => [
                    'heading' => 'Industrial Power & Robotic Precision.',
                    'image_1' => 'images/left.jpg',
                    'image_2' => 'images/e3daa32d63e4b525d4d953d43fca4bac8663a408.jpg',
                    'image_3' => 'images/75380b79c3a2b132c49c08f7ba4bf3c2cef763d7.jpg',
                    'image_4' => 'images/ce777daf76ee5541c189407447390a60a69f9148.jpg',
                    'image_5' => 'images/6b43bbe1f1ef199886ab7fc8478b9fa2e9bec8c0.jpg',
                    'image_6' => 'images/3e21a292ef2acb2f4638dacec719d43784164505.jpg',
                ],
                'video' => [
                    'thumbnail' => 'assets/portfolio/lantech.png',
                    'video_file' => '',
                ],
            ],
        ];

        foreach ($caseStudies as $studyData) {
            CaseStudyPage::updateOrCreate(
                ['slug' => $studyData['slug']],
                $studyData
            );
        }

        // Update Portfolio Items to link to their respective Case Studies
        $portfolioItems = [
            [
                'id' => '00000000-0000-0000-0000-000000000001',
                'title' => 'McLaren Golf',
                'description' => 'High-performance engineered eCommerce experience.',
                'image' => 'assets/portfolio/mclaren-golf.png',
                'btn_text' => 'View Work',
                'btn_link' => route('case-study.show', 'mclaren-golf', false) ?: '/case-study/mclaren-golf',
                'industry' => 'web',
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000002',
                'title' => 'Natare',
                'description' => 'Highest quality stainless steel pools.',
                'image' => 'assets/portfolio/natare.png',
                'btn_text' => 'View Work',
                'btn_link' => route('case-study.show', 'natare', false) ?: '/case-study/natare',
                'industry' => 'web',
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000003',
                'title' => 'Colorado Rafting',
                'description' => 'Experience the adventure.',
                'image' => 'assets/portfolio/colorado-rafting.png',
                'btn_text' => 'View Work',
                'btn_link' => route('case-study.show', 'colorado-rafting', false) ?: '/case-study/colorado-rafting',
                'industry' => 'web',
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000004',
                'title' => 'Imagine Software',
                'description' => 'Technology reimagined.',
                'image' => 'assets/portfolio/imagine-software.png',
                'btn_text' => 'View Work',
                'btn_link' => route('case-study.show', 'imagine-software', false) ?: '/case-study/imagine-software',
                'industry' => 'brand',
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000005',
                'title' => 'Night of Mystery',
                'description' => 'Can you solve the mystery?',
                'image' => 'assets/portfolio/night-of-mystery.png',
                'btn_text' => 'View Work',
                'btn_link' => route('case-study.show', 'night-of-mystery', false) ?: '/case-study/night-of-mystery',
                'industry' => 'brand',
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000006',
                'title' => 'Lantech',
                'description' => 'We transformed the machines.',
                'image' => 'assets/portfolio/lantech.png',
                'btn_text' => 'View Work',
                'btn_link' => route('case-study.show', 'lantech', false) ?: '/case-study/lantech',
                'industry' => 'web',
            ],
        ];

        foreach ($portfolioItems as $item) {
            PortfolioItem::updateOrCreate(['id' => $item['id']], $item);
        }
    }
}
