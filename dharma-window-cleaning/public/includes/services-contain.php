<?php
require_once __DIR__ . '/config.php';

// Text below is printed through htmlspecialchars(), so use plain characters (— ’) not HTML entities.
// The 11 services on the client's flyer. Each service page shows hero_image only. 'video' (homepage service card) is left empty when there is none.
// All photos and videos are the client's own (uploaded 2026-11-04).
$services = [

    // ── Cleaning ─────────────────────────────

    'window-cleaning' => [
        'category'        => 'Cleaning',
        'category_anchor' => 'cleaning',
        'tag'             => 'Windows',
        'title'           => 'Window Cleaning',
        'tagline'         => 'Streak-free glass, frames and sills for homes, commercial buildings and strata properties.',
        'hero_image'      => 'images/window-cleaning-detail.jpg',
        'hero_alt'        => 'Everest Crew Clean team member cleaning a tall glass window with a water-fed pole',
        'video'           => '',
        'video_poster'    => '',
        'intro'           => [
            "Clean windows let the light in and make the whole property look cared for. {$business_name} cleans glass, frames and sills for residential, commercial and strata properties, leaving every pane clear and streak-free.",
            'We use eco-friendly products and modern equipment that are safe for your family, pets and the planet, whether you need a one-time clean or ongoing maintenance.',
        ],
        'features'        => [
            'Glass cleaned streak-free',
            'Frames, tracks and sills wiped down',
            'Homes, commercial and strata properties',
            'Eco-friendly, non-toxic products',
            'One-time or ongoing maintenance cleans',
            'Fully insured team',
        ],
        'page_title'      => "Window Cleaning {$suburb} | {$business_name}",
    ],

    'gutter-cleaning' => [
        'category'        => 'Cleaning',
        'category_anchor' => 'cleaning',
        'tag'             => 'Gutters',
        'title'           => 'Gutter Cleaning',
        'tagline'         => 'Leaves and debris cleared from gutters so rainwater flows away from your home.',
        'hero_image'      => 'images/gutter-cleaning.png',
        'hero_alt'        => 'Gutter before and after cleaning — leaves and sludge removed',
        'video'           => '',
        'video_poster'    => '',
        'intro'           => [
            'Blocked gutters can overflow, stain walls and let water into the roof. Our team clears leaves, sticks and built-up debris from your gutters so rainwater runs away from the property the way it should.',
            "{$business_name}'s experienced team works safely at height with the right equipment, and we leave the site tidy when the job is done.",
        ],
        'features'        => [
            'Leaves, sticks and debris removed by hand',
            'Gutters cleared along the full roofline',
            'Debris bagged and taken away',
            'Safe work at height with the right equipment',
            'Ask about gutter guard installation',
            'Fully insured team',
        ],
        'page_title'      => "Gutter Cleaning {$suburb} | {$business_name}",
    ],

    'solar-panel-cleaning' => [
        'category'        => 'Cleaning',
        'category_anchor' => 'cleaning',
        'tag'             => 'Solar',
        'title'           => 'Solar Panel Cleaning',
        'tagline'         => 'Dust, bird droppings and grime removed so your panels can take in the sun.',
        'hero_image'      => 'images/solar-panel-cleaning.jpg',
        'hero_alt'        => 'Everest Crew Clean team member cleaning solar panels on a tiled roof',
        'video'           => 'images/solar-panel-cleaning-roof.mp4',
        'video_poster'    => 'images/solar-panel-cleaning.jpg',
        'intro'           => [
            'Dust, pollen and bird droppings settle on solar panels and block sunlight. We clean them carefully so the glass is clear again and your system can make the most of every sunny day.',
            'Panels are cleaned with gentle, eco-friendly methods that are safe for the glass and frames, by a team that works safely on the roof.',
        ],
        'features'        => [
            'Dust, pollen and bird droppings removed',
            'Gentle methods that are safe for the panels',
            'Eco-friendly, non-toxic products',
            'Safe work on the roof',
            'Ask about solar panel bird proofing',
            'Fully insured team',
        ],
        'page_title'      => "Solar Panel Cleaning {$suburb} | {$business_name}",
    ],

    'skylight-cleaning' => [
        'category'        => 'Cleaning',
        'category_anchor' => 'cleaning',
        'tag'             => 'Skylights',
        'title'           => 'Skylight Cleaning',
        'tagline'         => 'Dirt, leaves and stains cleared from skylights so the natural light comes back in.',
        'hero_image'      => 'images/skylights-clean.jpg',
        'hero_alt'        => 'Skylight before and after cleaning — dirty glass, then clear glass',
        'video'           => '',
        'video_poster'    => '',
        'intro'           => [
            'Skylights collect dust, leaves, bird droppings and water stains, and the room below gets darker as they do. We clean the glass and frame from the roof so the light pours back in.',
            'Our team works safely on the roof with the right equipment and uses eco-friendly products that are safe for your home and garden.',
        ],
        'features'        => [
            'Glass cleaned from the roof side',
            'Leaves, dirt and bird droppings removed',
            'Frames and seals wiped down',
            'Safe work on the roof',
            'Pairs well with window or solar panel cleaning',
            'Fully insured team',
        ],
        'page_title'      => "Skylight Cleaning {$suburb} | {$business_name}",
    ],

    // ── Pressure washing ─────────────────────

    'roof-pressure-wash' => [
        'category'        => 'Pressure Washing',
        'category_anchor' => 'pressure-washing',
        'tag'             => 'Roofs',
        'title'           => 'Roof Pressure Wash',
        'tagline'         => 'Moss, lichen, dirt and stains washed off the roof so it looks fresh again.',
        'hero_image'      => 'images/roof-pressure-wash.jpg',
        'hero_alt'        => 'Everest Crew Clean team member pressure washing a terracotta tiled roof',
        'video'           => 'images/roof-pressure-wash.mp4',
        'video_poster'    => 'images/roof-pressure-wash.jpg',
        'intro'           => [
            'Over time, roofs build up moss, lichen, dirt and dark stains. A roof pressure wash lifts it away and brings the tiles or sheeting back to a clean, even colour, which also helps your gutters stay clearer.',
            "{$business_name} sets the pressure to suit your roof and works safely at height, rinsing the debris away and leaving the site tidy.",
        ],
        'features'        => [
            'Moss, lichen, dirt and stains removed',
            'Tiled and metal roofs',
            'Pressure set to suit the roof',
            'Safe work at height',
            'Gutters and downpipes rinsed clear',
            'Fully insured team',
        ],
        'page_title'      => "Roof Pressure Wash {$suburb} | {$business_name}",
    ],

    'house-soft-pressure-wash' => [
        'category'        => 'Pressure Washing',
        'category_anchor' => 'pressure-washing',
        'tag'             => 'Soft Wash',
        'title'           => 'House Soft Pressure Wash',
        'tagline'         => 'A gentle, low-pressure wash for walls, eaves and render that removes dirt, mould and cobwebs.',
        'hero_image'      => 'images/roof-pressure-wash-house.jpg',
        'hero_alt'        => 'Everest Crew Clean team member washing the exterior of a brick home',
        'video'           => 'images/roof-pressure-wash-brick.mp4',
        'video_poster'    => 'images/roof-pressure-wash-house.jpg',
        'intro'           => [
            'Walls, render, cladding and eaves need a gentler touch than concrete. Our house soft wash uses low pressure with eco-friendly cleaning solutions to lift dirt, mould, mildew and cobwebs without damaging paint or surfaces.',
            'We wash the outside of the house from top to bottom in one visit, so the whole property looks fresh and well kept.',
        ],
        'features'        => [
            'Walls, render, cladding and eaves',
            'Low pressure that is safe for paint',
            'Removes dirt, mould, mildew and cobwebs',
            'Eco-friendly cleaning solutions',
            'The whole exterior done in one visit',
            'Fully insured team',
        ],
        'page_title'      => "House Soft Pressure Wash {$suburb} | {$business_name}",
    ],

    'backyard-pressure-wash-sealing' => [
        'category'        => 'Pressure Washing',
        'category_anchor' => 'pressure-washing',
        'tag'             => 'Wash & Seal',
        'title'           => 'Backyard Pressure Wash & Sealing',
        'tagline'         => 'Patios, paths, pavers and decks pressure washed, then sealed to protect them.',
        'hero_image'      => 'images/driveway-pressure-clean.jpg',
        'hero_alt'        => 'Surface cleaner lifting grime off concrete, leaving a clean strip',
        'video'           => '',
        'video_poster'    => '',
        'intro'           => [
            'Bring your outdoor living areas back to life. We pressure wash patios, paths, pavers, driveways and decks to remove dirt, moss, mould and stains, front yard or backyard.',
            'Once the surface is clean and dry, we can seal it to help protect it from stains and weather and keep it looking better for longer.',
        ],
        'features'        => [
            'Patios, paths, pavers, driveways and decks',
            'Dirt, moss, mould and stains removed',
            'Sealing to protect the surface',
            'Front yard or backyard',
            'Care taken around gardens and furniture',
            'Fully insured team',
        ],
        'page_title'      => "Backyard Pressure Wash & Sealing {$suburb} | {$business_name}",
    ],

    // ── Roof & property maintenance ──────────

    'gutter-guard-installation' => [
        'category'        => 'Roof & Property Maintenance',
        'category_anchor' => 'roof-property-maintenance',
        'tag'             => 'Gutter Guard',
        'title'           => 'Gutter Guard Installation',
        'tagline'         => 'Mesh gutter guard fitted along your roofline to keep leaves and debris out.',
        'hero_image'      => 'images/aluminum-gutter-guard.jpg',
        'hero_alt'        => 'Tiled roof gutter before and after aluminium mesh gutter guard is fitted',
        'video'           => '',
        'video_poster'    => '',
        'intro'           => [
            'Gutter guard stops leaves, twigs and debris from filling your gutters, so rainwater keeps flowing and you need fewer gutter cleans.',
            'We clean the gutters first, then fit the mesh securely along the roofline, finishing it neatly at the tiles.',
        ],
        'features'        => [
            'Gutters cleaned before installation',
            'Mesh fitted securely along the roofline',
            'Keeps leaves and debris out',
            'Fewer gutter cleans needed',
            'Neat finish at the roof tiles',
            'Fully insured team',
        ],
        'page_title'      => "Gutter Guard Installation {$suburb} | {$business_name}",
    ],

    'solar-panel-bird-proofing' => [
        'category'        => 'Roof & Property Maintenance',
        'category_anchor' => 'roof-property-maintenance',
        'tag'             => 'Bird Proofing',
        'title'           => 'Solar Panel Bird Mesh (Bird Proofing)',
        'tagline'         => 'Mesh fitted around your solar panels to stop birds nesting underneath.',
        'hero_image'      => 'images/solarpanel.jpg',
        'hero_alt'        => 'Black bird mesh fitted around rooftop solar panels',
        'video'           => '',
        'video_poster'    => '',
        'intro'           => [
            'Pigeons and other birds love nesting under solar panels. Their nests, droppings and noise can damage wiring, block gutters and make a mess of the roof.',
            'We fit bird mesh around the edges of your panels to seal off the gap underneath. Pair it with a solar panel clean for the best result.',
        ],
        'features'        => [
            'Mesh fitted around the panel edges',
            'Stops birds nesting under the panels',
            'Neat, secure fit around the array',
            'Protects wiring and the roof',
            'Pairs well with a solar panel clean',
            'Fully insured team',
        ],
        'page_title'      => "Solar Panel Bird Proofing {$suburb} | {$business_name}",
    ],

    'roof-repair-maintenance' => [
        'category'        => 'Roof & Property Maintenance',
        'category_anchor' => 'roof-property-maintenance',
        'tag'             => 'Roofs',
        'title'           => 'Roof Repair & Maintenance',
        'tagline'         => 'Broken tiles, valleys and roof wear fixed before they turn into leaks.',
        'hero_image'      => 'images/job-roof-valley.jpg',
        'hero_alt'        => 'Tiled roof and metal valley on a house above a brick driveway',
        'video'           => '',
        'video_poster'    => '',
        'intro'           => [
            'Small roof problems can become big ones. We check and repair broken or slipped tiles, clear and maintain valleys, and look after the roof so it keeps the weather out.',
            'Regular roof maintenance, together with gutter cleaning and a roof wash, keeps your home protected and looking its best.',
        ],
        'features'        => [
            'Broken and slipped tiles repaired',
            'Valleys cleared and maintained',
            'Roof checked for wear and damage',
            'Safe work at height',
            'Pairs well with gutter cleaning and a roof wash',
            'Fully insured team',
        ],
        'page_title'      => "Roof Repair & Maintenance {$suburb} | {$business_name}",
    ],

    'tree-branch-trimming' => [
        'category'        => 'Roof & Property Maintenance',
        'category_anchor' => 'roof-property-maintenance',
        'tag'             => 'Trees',
        'title'           => 'Tree & Branch Trimming',
        'tagline'         => 'Overhanging branches trimmed back from the roof, gutters and paths.',
        'hero_image'      => 'images/gutter-branches.jpg',
        'hero_alt'        => 'Branches and plant growth pulled out of a blocked roof gutter',
        'video'           => '',
        'video_poster'    => '',
        'intro'           => [
            'Overhanging branches drop leaves into gutters, scrape the roof and give pests a path onto the house. We trim trees and branches back so your roof, gutters and paths stay clear.',
            'The trimmings are cleaned up and taken away, leaving the yard tidy.',
        ],
        'features'        => [
            'Overhanging branches trimmed back',
            'Keeps the roof and gutters clear',
            'Paths and driveways cleared',
            'Green waste cleaned up and removed',
            'Pairs well with gutter cleaning',
            'Fully insured team',
        ],
        'page_title'      => "Tree & Branch Trimming {$suburb} | {$business_name}",
    ],

];
