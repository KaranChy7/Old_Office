<?php
// Service content (from atlanticpainting.com.au/service/*).
// Used by the home page service cards and each single service page.
//
// Block types: text | cards | list | steps | faq

$pp_services_data = [

    'interior-painting' => [
        'title'   => 'Interior Painting',
        'icon'    => 'home',
        'color'   => 'blue',
        'img'     => 'service-interior.jpg',
        'alt'     => 'Bright, freshly painted modern living room',
        'summary' => 'Brighten your interiors with carefully painted walls, ceilings, doors and trims, using colours and finishes that complement your space.',
        'tagline' => 'Create Rooms That Feel Fresh and Inviting',
        'intro'   => [
            'Refresh your living spaces with interior painting from Atlantic Painting. From subtle colour changes to bold feature walls, we help bring a coordinated look to homes and businesses across Sydney’s Inner West, Eastern Suburbs, St George and Sutherland Shire.',
        ],
        'blocks'  => [
            ['type' => 'text', 'title' => 'A Finish for Every Space', 'body' => [
                'We paint walls, ceilings, doors, skirting boards and trims, with colours and finishes selected to complement your interiors. Whether you are updating one room or repainting the entire property, we plan the work around your needs.',
            ]],
            ['type' => 'list', 'title' => 'What We Paint', 'items' => [
                'Walls and feature walls',
                'Ceilings',
                'Doors',
                'Skirting boards',
                'Trims',
            ]],
            ['type' => 'text', 'title' => 'Prepared with Care', 'body' => [
                'A smooth finish starts with suitable preparation. We assess existing surfaces and outline any cleaning, minor filling, sanding and priming required. Nearby furniture, flooring and fixtures are protected before painting begins.',
            ]],
            ['type' => 'text', 'title' => 'Planned Around Your Routine', 'body' => [
                'We discuss access, room order and drying requirements so you know what to expect. Your written quote outlines the agreed work, followed by a final walkthrough when painting is complete.',
            ]],
        ],
    ],

    'exterior-painting' => [
        'title'   => 'Exterior Painting',
        'icon'    => 'home',
        'color'   => 'green',
        'img'     => 'service-exterior.jpg',
        'alt'     => 'Two-storey home with a freshly painted exterior by Atlantic Painting',
        'summary' => 'Exterior surfaces face sunlight, rain, moisture and changing temperatures — we prepare and coat them to last.',
        'tagline' => 'Refresh Your Exterior. Renew Your Street Appeal.',
        'intro'   => [
            'Atlantic Painting provides exterior painting services across Sydney’s Inner West, Eastern Suburbs, St George and Sutherland Shire. We help homeowners and businesses refresh weathered surfaces with careful preparation and coatings selected for outdoor conditions.',
            'Whether you want to update your colour scheme or repaint tired exterior walls, we assess your property and explain the work required before painting begins.',
        ],
        'blocks'  => [
            ['type' => 'text', 'title' => 'Exterior Painting Tailored to Your Property', 'body' => [
                'Exterior surfaces face sunlight, rain, moisture and changing temperatures. The condition of the existing paint, the building materials and the level of exposure all influence the preparation and coating system needed.',
                'We consider these factors when planning your repaint, helping you choose finishes that suit the property and the appearance you want to achieve.',
            ]],
            ['type' => 'cards', 'title' => 'Our Exterior Painting Services', 'items' => [
                ['External Walls and Façades', 'Refresh suitable rendered, masonry, weatherboard and previously painted surfaces with a coordinated finish.'],
                ['Exterior Doors and Frames', 'Renew entrances and painted frames with finishes suited to their material and exposure.'],
                ['Fascias, Eaves and Trims', 'Update exterior details to bring a more consistent appearance to your property.'],
                ['Fences and Gates', 'Refresh suitable timber or metal fences and gates following an assessment of their condition.'],
                ['Garages and Outbuildings', 'Coordinate the appearance of suitable external surfaces across your property.'],
                ['Residential and Commercial Exteriors', 'Painting for homes and business premises, with access and scheduling discussed during planning.'],
            ], 'note' => 'All surfaces and inclusions are confirmed following assessment.'],
            ['type' => 'list', 'title' => 'Thorough Preparation Before Painting',
             'body'  => ['A new coating needs a sound, suitably prepared surface. Applying paint over loose coatings or unresolved damage can affect the finished result.', 'Depending on the surface and agreed scope, preparation may include:'],
             'items' => [
                'Cleaning away dirt, residue and surface contaminants.',
                'Scraping loose or peeling paint.',
                'Sanding rough edges and weathered areas.',
                'Filling minor surface imperfections.',
                'Treating suitable areas of surface rust.',
                'Applying primers matched to the material and coating system.',
                'Protecting windows, paths, plants and nearby fixtures.',
             ],
             'note' => 'Rot, ongoing water entry or significant building damage may need repairs before painting can proceed.'],
            ['type' => 'text', 'title' => 'Coatings Selected for Outdoor Conditions', 'body' => [
                'Different exterior materials require different products. We assess the substrate and existing finish before discussing suitable primers and topcoats.',
                'Colour, sheen, exposure and maintenance needs are considered as part of the selection. We follow the chosen coating system’s application requirements, including suitable weather conditions and drying intervals.',
            ]],
            ['type' => 'text', 'title' => 'A Colour Scheme That Complements Your Property', 'body' => [
                'Exterior colours can bring walls, roofing, trims and entrances together. We discuss your preferred look and how it relates to existing features such as brickwork, paving and landscaping.',
                'Whether you prefer a subtle refresh or a more noticeable change, considering the full exterior helps create a cohesive result. Sample colours can also help you assess their appearance in natural light.',
            ]],
            ['type' => 'text', 'title' => 'Weather and Access Planning', 'body' => [
                'Exterior painting depends on suitable conditions. Rain, excessive heat, humidity and surface moisture can affect application and drying, so scheduling may need to change with the weather.',
                'We also discuss access around the building and identify whether specialist equipment is required. These requirements are considered when preparing the project scope and quote.',
            ]],
            ['type' => 'steps', 'title' => 'Our Exterior Painting Process', 'items' => [
                ['Discuss Your Project', 'Tell us which surfaces need painting and the changes you have in mind.'],
                ['Assess the Exterior', 'We review existing coatings, visible damage, access and preparation requirements.'],
                ['Confirm the Quote', 'You receive a written scope outlining the agreed areas, preparation and finishes.'],
                ['Prepare and Paint', 'We protect surrounding areas, prepare the surfaces and apply the selected coating system.'],
                ['Inspect and Handover', 'We review the completed finish with you and tidy the work area.'],
            ]],
            ['type' => 'text', 'title' => 'Why Choose Atlantic Painting?', 'body' => [
                'We focus on the preparation and finishing details that contribute to a well-presented exterior. With clear communication, suitable coating choices and care for surrounding areas, we help you plan your repaint with confidence.',
            ]],
            ['type' => 'faq', 'title' => 'Frequently Asked Questions', 'items' => [
                ['How do I know when my exterior needs repainting?', 'Fading, peeling, cracking and worn coatings can indicate that the surface needs attention. An assessment helps identify the preparation or repairs required.'],
                ['Can you paint over existing exterior paint?', 'This depends on its condition and compatibility with the proposed coating. Loose or unsuitable paint needs to be addressed before repainting.'],
                ['Can you paint brick or rendered walls?', 'We can assess these surfaces and discuss suitable options. Moisture, existing coatings and the condition of the material need to be considered first.'],
                ['What happens if it rains during the project?', 'Work may be rescheduled to protect the preparation and finish. Painting resumes when conditions and surfaces are suitable for the selected products.'],
                ['How long will exterior painting take?', 'Timing depends on the property’s size, surface condition, access, preparation and weather. We discuss an estimated schedule after assessment.'],
                ['Will painting fix leaks or damaged timber?', 'Leaks, rot and other underlying defects require appropriate repairs. We discuss visible issues so they can be addressed before the affected surfaces are coated.'],
            ]],
        ],
    ],

    'residential-painting' => [
        'title'   => 'Residential Painting',
        'icon'    => 'home',
        'color'   => 'gold',
        'img'     => 'service-residential.jpg',
        'alt'     => 'Modern white weatherboard home with fresh paintwork',
        'summary' => 'Interior and exterior painting for houses, apartments and townhouses, with careful preparation and finishes selected around your home.',
        'tagline' => 'A Thoughtful Refresh for the Home You Live In',
        'intro'   => [
            'Every home has its own character, surface conditions and daily routine. Atlantic Painting provides residential painting for houses, apartments and townhouses across Sydney’s Inner West, Eastern Suburbs, St George and Sutherland Shire.',
            'Whether you are settling into a new property, updating familiar rooms or preparing to sell, we plan the painting around your priorities.',
        ],
        'blocks'  => [
            ['type' => 'text', 'title' => 'Colour That Works Throughout Your Home', 'body' => [
                'A coordinated scheme considers how rooms connect, how natural light changes and which existing features will remain. We discuss colours and sheen levels with these details in mind, helping you choose suitable finishes for walls, ceilings, doors and trims.',
                'For exterior work, coating choices also account for the material, existing paintwork and weather exposure.',
            ]],
            ['type' => 'text', 'title' => 'Preparation That Supports the Result', 'body' => [
                'Dents, loose paint and uneven repairs can affect the appearance of a fresh coat. We assess the surfaces and outline the cleaning, minor filling, sanding and priming included in your quote.',
                'Furniture, flooring and nearby fixtures are protected as part of the work plan. Any signs of ongoing moisture or significant damage are discussed before the affected areas are painted.',
            ]],
            ['type' => 'text', 'title' => 'Painting Around Everyday Life', 'body' => [
                'For occupied homes, we discuss room order, access and drying requirements so you can plan ahead. Apartment projects may also require coordination with building management for shared access and work-hour restrictions.',
                'From the written quote to the final walkthrough, you know which areas are included and what to expect.',
            ]],
        ],
    ],

    'commercial-painting' => [
        'title'   => 'Commercial Painting',
        'icon'    => 'building',
        'color'   => 'purple',
        'img'     => 'service-commercial.jpg',
        'alt'     => 'Commercial building repainted by Atlantic Painting',
        'summary' => 'We discuss how your premises are used before recommending a suitable scope and sequence of work.',
        'tagline' => 'A Fresh, Professional Look for Your Business',
        'intro'   => [
            'Atlantic Painting provides commercial painting services across Sydney’s Inner West, Eastern Suburbs, St George and Sutherland Shire. We help business owners and property managers refresh their premises with careful preparation, suitable finishes and clear project coordination.',
            'Whether you are updating an office, repainting a shopfront or refreshing a larger commercial property, we plan the work around your premises and operational requirements.',
        ],
        'blocks'  => [
            ['type' => 'text', 'title' => 'Painting Planned Around Your Business', 'body' => [
                'Commercial painting requires consideration of staff, customers, equipment and access. We discuss how your premises are used before recommending a suitable scope and sequence of work.',
                'From customer-facing areas to internal workspaces, our focus is on improving presentation while managing the practical requirements of the project. Tell us about any restricted areas or preferred working hours during the quoting stage so these can be considered.',
            ]],
            ['type' => 'cards', 'title' => 'Our Commercial Painting Services', 'items' => [
                ['Office Painting', 'Refresh reception areas, meeting rooms, workspaces and shared facilities with a coordinated colour scheme.'],
                ['Retail Painting', 'Update shop interiors and painted shopfront surfaces to create a welcoming setting for customers.'],
                ['Interior Commercial Painting', 'Renew walls, ceilings, doors and trims with finishes selected for the use of each space.'],
                ['Exterior Commercial Painting', 'Improve the appearance of suitable façades, external walls and painted building details.'],
                ['Common Area Painting', 'Refresh entrances, corridors, stairwells and shared spaces within commercial properties.'],
                ['Tenancy and Fit-Out Painting', 'Coordinate painting for tenancy updates, renovations and fit-outs, with the scope agreed alongside relevant project contacts.'],
            ]],
            ['type' => 'list', 'title' => 'Careful Preparation for a Consistent Finish',
             'body'  => ['Preparation is an essential part of achieving a well-presented result. We assess existing coatings, surface defects and areas of wear before outlining the work required.', 'Depending on the agreed scope, preparation may include:'],
             'items' => [
                'Cleaning surfaces to remove dirt and residue.',
                'Removing loose or peeling paint.',
                'Filling minor holes, cracks and imperfections.',
                'Sanding repaired or uneven areas.',
                'Applying suitable primers where required.',
                'Protecting flooring, furniture, equipment and nearby fixtures.',
             ],
             'note' => 'Any signs of ongoing moisture or more extensive damage are discussed before the affected areas are painted.'],
            ['type' => 'text', 'title' => 'Finishes Suited to Commercial Spaces', 'body' => [
                'Different areas of a business have different demands. Reception walls, busy corridors and exterior surfaces may require different coating systems.',
                'We discuss suitable finishes with consideration for appearance, cleaning, wear and the existing surface. Colour choices can also be coordinated with your business’s branding and the atmosphere you want to create.',
            ]],
            ['type' => 'text', 'title' => 'Scheduling and Access Coordination', 'body' => [
                'A clear work plan helps everyone understand what to expect. We discuss access arrangements, the sequence of painting and any areas that need to remain available during the project.',
                'Where practical, work can be planned in stages to accommodate the use of the premises. Any requirements for work outside normal business hours should be discussed before booking and confirmed as part of the quote.',
            ]],
            ['type' => 'text', 'title' => 'Clear Scope and Written Quotes', 'body' => [
                'Your quote outlines the areas to be painted, preparation requirements and proposed finishes. We also discuss relevant access arrangements and exclusions so the scope is understood before work begins.',
                'If additional work is identified or your requirements change, we discuss the proposed changes before proceeding.',
            ]],
            ['type' => 'steps', 'title' => 'Our Commercial Painting Process', 'items' => [
                ['Discuss Your Requirements', 'Tell us about your premises, the areas needing attention and your preferred timeframe.'],
                ['Assess the Property', 'We review surface condition, access, occupancy and preparation requirements.'],
                ['Confirm the Scope', 'You receive a written quote outlining the proposed work and finishes.'],
                ['Prepare and Paint', 'We protect surrounding areas, prepare the agreed surfaces and carry out the painting.'],
                ['Review and Handover', 'We inspect the completed work with your nominated contact and tidy the work area.'],
            ]],
            ['type' => 'text', 'title' => 'Why Choose Atlantic Painting?', 'body' => [
                'We combine attention to detail with practical project planning. Through clear communication, careful preparation and respect for your premises, we help you achieve a refreshed commercial space that presents your business well.',
            ]],
        ],
    ],

    'roof-spraying' => [
        'title'   => 'Roof Spraying',
        'icon'    => 'fence',
        'color'   => 'teal',
        'img'     => 'service-roof-spraying.jpg',
        'alt'     => 'Freshly coated dark grey roof tiles',
        'summary' => 'We recoat tired tin and tile roofs — re-pointing ridge capping and replacing cracked tiles before spraying.',
        'tagline' => 'A Refreshed Roof Starts with the Right Assessment',
        'intro'   => [
            'A faded or uneven roof finish can affect the appearance of your entire property. Atlantic Painting provides roof spraying across Sydney’s Inner West, Eastern Suburbs, St George and Sutherland Shire, subject to an assessment of roof condition and coating suitability.',
        ],
        'blocks'  => [
            ['type' => 'text', 'title' => 'Assess Before You Coat', 'body' => [
                'Roof materials, existing finishes and signs of deterioration influence whether spraying is appropriate. We assess the surface and discuss any repairs needed before coating begins. Leaks, damaged roofing and defective flashings require attention; a new coating cannot replace those repairs.',
            ]],
            ['type' => 'text', 'title' => 'Prepare for Proper Adhesion', 'body' => [
                'For a suitable roof, preparation may include cleaning, removing loose coatings and treating areas requiring a compatible primer. The surface must be sound and sufficiently dry before the selected coating system is applied.',
            ]],
            ['type' => 'text', 'title' => 'Apply with Care', 'body' => [
                'Spray application is planned around roof access, surrounding property and weather conditions. Nearby surfaces are protected, and wind conditions are considered to manage overspray. Application and drying intervals follow the selected product’s requirements.',
                'We discuss colour options, the proposed coating system and the agreed scope in your quote.',
            ]],
        ],
    ],
];
