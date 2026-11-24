<?php
// ═══════════════════════════════════════
//   SITE DATA — services, projects, images
//   Single source of truth for the header menu, the homepage
//   services slider, services.php and every service / project page.
// ═══════════════════════════════════════

// ── Photo library ───────────────────────────
// True-Line job photos in /images, keyed by file number => alt text.
$tl_images = [
    1  => 'Frameless glass pool fence installed beside a timber pergola',
    2  => 'Frameless glass pool fencing around an in-ground pool',
    3  => 'Perforated powder-coated steel planter box',
    4  => 'Curved perforated steel planter boxes fabricated in the workshop',
    5  => 'Row of powder-coated perforated planter boxes on castors',
    6  => 'Perforated steel planter boxes lined up outside the workshop',
    7  => 'Glass balustrade on a new double-storey home',
    8  => 'Glass pool fence with black aluminium feature posts',
    9  => 'Frameless glass balustrade on a double-storey home',
    10 => 'Black aluminium slat privacy screen on a new build',
    11 => 'Horizontal aluminium slat screening along a townhouse walkway',
    12 => 'Black horizontal slat privacy screen installed on a townhouse',
    13 => 'Aluminium slat screens running the length of a townhouse',
    14 => 'Black vertical slat pedestrian gate with intercom',
    15 => 'Black slat entry gate set into a brick wall',
    16 => 'Black aluminium slat gate and screen at a front entry',
    17 => 'Slat entry gate between brick and timber walls',
    18 => 'Aluminium batten screen cladding across a home facade',
    19 => 'Black slat side gate between masonry walls',
    20 => 'Black slat side gate and screening beside a rendered wall',
    21 => 'Black steel picket fence and gate beside a brick home',
    22 => 'Frameless glass pool fence on a tiled courtyard',
    23 => 'Frameless glass pool fencing with stainless spigots',
    24 => 'Frameless glass pool fence enclosing a paved courtyard',
    25 => 'Frameless glass balustrade on a modern balcony',
    26 => 'Frameless glass balustrades on upper-level balconies',
    27 => 'Grey aluminium slat front fence',
    28 => 'Frameless glass shower screen',
    29 => 'Wrought iron Juliet balconies on a white facade',
    30 => 'Row of wrought iron Juliet balconies under window awnings',
    31 => 'Frameless glass pool fence on a tiled pool deck',
    32 => 'Glass balustrade with black spigots overlooking a park',
    33 => 'Frameless glass fence around a backyard spa',
    34 => 'Frameless glass spa enclosure beside a brick home',
];

/** Image URL for a photo number. */
function tl_img(int $n): string
{
    return 'images/' . $n . '.jpg';
}

/** Image alt text. */
function tl_alt(int $n): string
{
    global $tl_images;
    return htmlspecialchars($tl_images[$n] ?? 'Tru-Line Installs project');
}

// ── Services ────────────────────────────────
// Order matches the business service list (and the header mega-menu).
$tl_services = [
    'custom-metal-finishes' => [
        'name'     => 'Custom Metal Finishes',
        'title'    => 'Custom Metal<br>Finishes',
        'tagline'  => 'The Right Finish<br>For Every Surface',
        'summary'  => 'The coating and finishing of metal can have a major impact on its long-term durability and appearance, matched to your design brief and application.',
        'intro'    => [
            'The coating and finishing of metal has a major impact on how it performs and how it looks for years to come. At True-Line Installs we match every finish to your design brief, the material and the environment the piece will live in.',
            'From brushed and bead-blasted textures to powder coat, clear lacquer and raw mill finish, we prepare every surface properly before a finish goes on — so the result looks right on day one and holds up long after.',
        ],
        'features' => ['Powder coat &amp; wet-spray finishes', 'Brushed, satin &amp; bead-blasted textures', 'Clear lacquers &amp; protective sealers', 'Blackened &amp; bronzed steel', 'Colour matching to your palette', 'Indoor &amp; outdoor rated coatings'],
        'caption'  => ['Surface Finishing', 'Preparation &amp; Coating'],
        'uses'     => [['Architecture', 'building'], ['Residential', 'home'], ['Signage', 'sign']],
        'images'   => [5, 3, 6],
    ],
    'wall-cladding' => [
        'name'     => 'Wall Cladding',
        'title'    => 'Architectural<br>Wall Cladding',
        'tagline'  => 'Facades With<br>Real Character',
        'summary'  => 'Metal wall cladding is a striking way to bring architectural character to an interior or exterior — fabricated and installed for commercial facades and feature walls.',
        'intro'    => [
            'Metal wall cladding is one of the most striking ways to add architectural character to a building. We fabricate and install cladding for commercial facades, feature walls, reception areas and residential exteriors across Melbourne.',
            'Every panel is measured, cut and folded in our Carrum Downs workshop, then installed cleanly on site with concealed or expressed fixings to suit the design. We work with aluminium, steel, stainless, copper and Corten.',
        ],
        'features' => ['Aluminium &amp; composite panels', 'Corten &amp; weathering steel', 'Perforated &amp; laser-cut screens', 'Interior feature walls', 'Concealed &amp; expressed fixings', 'Metal &amp; glass facade detailing'],
        'caption'  => ['Facade Design', 'Commercial &amp; Residential'],
        'uses'     => [['Facades', 'building'], ['Feature Walls', 'layers'], ['Homes', 'home']],
        'images'   => [18, 11, 10],
    ],
    'patina' => [
        'name'     => 'Patina',
        'title'    => 'Patina<br>Finishing',
        'tagline'  => 'Depth, Colour<br>&amp; Character',
        'summary'  => 'Hand-applied patina finishes that bring depth, character and a naturally aged look to raw metal.',
        'intro'    => [
            'A patina finish gives metal a depth, colour and naturally aged character that paint simply can\'t replicate. We hand-apply patinas to copper, brass, bronze and steel for feature pieces, signage and architectural detailing.',
            'Every patina is developed by hand, so no two pieces are exactly alike. Once the colour is right, we seal it to lock in the finish and protect it from handling and the weather.',
        ],
        'features' => ['Verdigris &amp; green copper patinas', 'Brown &amp; antique bronze tones', 'Rust &amp; oxidised steel effects', 'Blackened &amp; gunmetal finishes', 'Hand-applied, one-off results', 'Clear protective sealing'],
        'caption'  => ['Hand Applied', 'Copper, Brass &amp; Steel'],
        'uses'     => [['Feature Pieces', 'sparkle'], ['Signage', 'sign'], ['Interiors', 'home']],
        'images'   => [6, 4, 30],
    ],
    'polishing' => [
        'name'     => 'Polishing',
        'title'    => 'Mirror &amp;<br>Satin Polishing',
        'tagline'  => 'A Finish That<br>Stands Up Close',
        'summary'  => 'Mirror to satin polishing that brings out the finish stainless steel and brass deserve.',
        'intro'    => [
            'Polishing brings out the finish that stainless steel, brass, copper and aluminium deserve. We take surfaces from scratched or mill-finish right through to a uniform satin grain or a full mirror shine.',
            'Edges, welds and corners are worked by hand where machines can\'t reach, so the finished piece holds up to close inspection — whether it\'s a handrail, a splashback or a piece of commercial joinery.',
        ],
        'features' => ['Mirror polishing', 'Satin &amp; brushed grain finishes', 'Weld blending &amp; grinding back', 'Stainless, brass, copper &amp; aluminium', 'Restoring tired metalwork', 'Protective coating after polish'],
        'caption'  => ['Mirror &amp; Satin', 'Stainless &amp; Brass'],
        'uses'     => [['Handrails', 'stairs'], ['Kitchens', 'home'], ['Fit-Outs', 'building']],
        'images'   => [2, 28, 24],
    ],
    'metal-grilles' => [
        'name'     => 'Metal Grilles',
        'title'    => 'Custom<br>Metal Grilles',
        'tagline'  => 'Airflow, Security<br>&amp; Style',
        'summary'  => 'Custom-designed architectural metal grilles, decorative or functional, cut and fabricated to fit any opening.',
        'intro'    => [
            'A good metal grille does more than cover an opening. We design and fabricate architectural grilles that balance airflow, security, screening and style — decorative or purely functional.',
            'Each grille is cut to fit its opening exactly, from slim linear vent grilles to large perforated or laser-cut privacy panels, and finished to match the surrounding space.',
        ],
        'features' => ['Linear &amp; slot vent grilles', 'Perforated &amp; laser-cut patterns', 'Security &amp; window grilles', 'Heating &amp; air-con covers', 'Removable &amp; hinged frames', 'Powder coat or natural finish'],
        'caption'  => ['Made To Fit', 'Decorative &amp; Functional'],
        'uses'     => [['Ventilation', 'gear'], ['Security', 'shield'], ['Screening', 'layers']],
        'images'   => [12, 13, 19],
    ],
    'press-brake' => [
        'name'     => 'Press Brake',
        'title'    => 'Press Brake<br>Forming',
        'tagline'  => 'Clean Folds.<br>Consistent Angles.',
        'summary'  => 'Precision press brake bending for clean folds and consistent angles on every panel.',
        'intro'    => [
            'Our press brake bends sheet and plate into clean, accurate folds for panels, brackets, flashings, channels and enclosures. Tight tolerances are held across the whole run, so every part matches the last.',
            'Whether it\'s a single prototype or a production batch, we work from your drawings or help develop them, making sure bend allowances are right before the first piece is formed.',
        ],
        'features' => ['Sheet &amp; plate bending', 'Brackets, channels &amp; angles', 'Flashings &amp; capping', 'Enclosures &amp; cabinets', 'One-offs &amp; production runs', 'Working from your drawings'],
        'caption'  => ['Precision Forming', 'Sheet &amp; Plate'],
        'uses'     => [['Brackets', 'ruler'], ['Building Trades', 'building'], ['Enclosures', 'layers']],
        'images'   => [4, 5, 27],
    ],
    'engraving' => [
        'name'     => 'Engraving',
        'title'    => 'Detailed<br>Engraving',
        'tagline'  => 'Detail Built<br>To Last',
        'summary'  => 'Detailed engraving work for signage, plaques and bespoke architectural features.',
        'intro'    => [
            'Engraving adds permanent, precise detail to metal. We engrave signage, plaques, nameplates, compliance tags and bespoke architectural features, from fine text to intricate logos and patterns.',
            'Every layout is set out and checked with you before a single cut is made. The result is a crisp, durable mark that won\'t fade, peel or wear off the way printed signage does.',
        ],
        'features' => ['Signage &amp; plaques', 'Nameplates &amp; compliance tags', 'Logos &amp; branding', 'Memorial &amp; commemorative pieces', 'Stainless, brass &amp; aluminium', 'Paint-filled or natural engraving'],
        'caption'  => ['Fine Detail', 'Signage &amp; Plaques'],
        'uses'     => [['Plaques', 'engrave'], ['Branding', 'sign'], ['Architecture', 'building']],
        'images'   => [3, 14, 6],
    ],
    'water-jet-cutting' => [
        'name'     => 'Water-Jet Cutting',
        'title'    => 'Water-Jet<br>Cutting',
        'tagline'  => 'Cold, Precise<br>Cutting',
        'summary'  => 'Cold, precise water-jet cutting for intricate patterns and heavy-gauge material alike.',
        'intro'    => [
            'Water-jet cutting uses a high-pressure stream of water and abrasive to cut metal, glass, stone and composites with no heat. That means no warping, no hardened edges and no change to the material\'s properties.',
            'It\'s the right choice for thick plate, heat-sensitive materials and intricate designs where edge quality and accuracy matter most. We cut from your DXF files or help you prepare them.',
        ],
        'features' => ['No heat-affected zone', 'Thick plate &amp; heavy-gauge metal', 'Glass, stone &amp; composites', 'Intricate patterns &amp; inlays', 'Tight tolerances', 'Cutting from DXF &amp; CAD files'],
        'caption'  => ['Cold Cutting', 'Metal, Glass &amp; Stone'],
        'uses'     => [['Thick Plate', 'layers'], ['Glass', 'window'], ['Inlays', 'sparkle']],
        'images'   => [23, 3, 8],
    ],
    'machining-milling' => [
        'name'     => 'Machining &amp; Milling',
        'title'    => 'Machining<br>&amp; Milling',
        'tagline'  => 'Parts Made<br>To Tolerance',
        'summary'  => 'In-house machining and milling to fabricate parts to exact tolerances.',
        'intro'    => [
            'In-house machining and milling lets us produce parts to exact tolerances, ready to fit straight into a larger fabrication. We turn, mill, drill and tap components in steel, stainless, aluminium and brass.',
            'From one-off custom components and repairs to short production runs, every part is checked against the drawing before it leaves the workshop.',
        ],
        'features' => ['Milling, turning &amp; drilling', 'Tapping &amp; threading', 'Custom fittings &amp; brackets', 'Repair &amp; replacement parts', 'One-offs &amp; short runs', 'Checked against your drawings'],
        'caption'  => ['In-House', 'Machined To Spec'],
        'uses'     => [['Custom Parts', 'gear'], ['Repairs', 'ruler'], ['Assemblies', 'layers']],
        'images'   => [16, 15, 20],
    ],
    'wrought-iron' => [
        'name'     => 'Wrought Iron',
        'title'    => 'Wrought Iron<br>Gates &amp; Rails',
        'tagline'  => 'Traditional<br>Craftsmanship',
        'summary'  => 'Traditional wrought iron gates, railings and balustrades, forged and installed on site.',
        'intro'    => [
            'Wrought iron brings timeless character to a property. We design, fabricate and install gates, fences, railings and balustrades, from traditional scrollwork to clean, contemporary profiles.',
            'Every piece is built to suit the home and handle daily use for decades. We also restore and repair existing wrought iron, matching original details wherever possible.',
        ],
        'features' => ['Driveway &amp; pedestrian gates', 'Fencing &amp; boundary railings', 'Balustrades &amp; stair rails', 'Scrollwork &amp; decorative detail', 'Restoration &amp; repairs', 'Automation-ready gate frames'],
        'caption'  => ['Built To Last', 'Gates, Fences &amp; Rails'],
        'uses'     => [['Gates', 'gate'], ['Balustrades', 'stairs'], ['Heritage Homes', 'home']],
        'images'   => [29, 21, 30],
    ],
    'laser-cutting' => [
        'name'     => 'Laser Cutting',
        'title'    => 'High-Precision<br>Laser Cutting',
        'tagline'  => 'Clean Edges,<br>Fine Detail',
        'summary'  => 'High-precision laser cutting for clean edges on even the most detailed designs.',
        'intro'    => [
            'High-precision laser cutting produces clean, accurate edges on even the most detailed designs. We cut brackets, panels, decorative screens, signage and components in steel, stainless and aluminium.',
            'Your design files go straight from screen to cutting bed, so every piece in the run is identical. Pair it with our press brake and welding for complete, ready-to-install parts.',
        ],
        'features' => ['Mild steel, stainless &amp; aluminium', 'Decorative screens &amp; panels', 'Signage &amp; lettering', 'Brackets &amp; components', 'Prototype to production', 'Cutting from DXF &amp; CAD files'],
        'caption'  => ['CNC Precision', 'Screens, Signs &amp; Parts'],
        'uses'     => [['Screens', 'layers'], ['Signage', 'sign'], ['Components', 'cut']],
        'images'   => [3, 6, 12],
    ],
    'materials-metal-fabrication' => [
        'name'     => 'Materials | Metal Fabrication',
        'short'    => 'Fabrication',
        'title'    => 'Materials &amp;<br>Metal Fabrication',
        'tagline'  => 'Metal Fabricators<br>Melbourne',
        'summary'  => 'Quality materials and full-service metal fabrication in Melbourne — from choosing the right steel to delivering the finished, installed piece.',
        'intro'    => [
            'Good fabrication starts with the right material. We work with mild steel, stainless steel, aluminium, brass, copper and Corten, and help you choose the grade, gauge and finish that suits the job and the budget.',
            'From there we handle the whole process under one roof — cutting, folding, machining, welding and finishing — then deliver and install the finished work. One team and one point of contact, from start to finish.',
        ],
        'features' => ['Mild &amp; stainless steel', 'Aluminium, brass &amp; copper', 'Corten &amp; weathering steel', 'Sheet, plate, tube &amp; section', 'Design-to-install fabrication', 'Metal &amp; glass combinations'],
        'caption'  => ['One Workshop', 'Materials To Install'],
        'uses'     => [['Commercial', 'building'], ['Residential', 'home'], ['Structural', 'ruler']],
        'images'   => [11, 5, 21],
    ],
    'welding' => [
        'name'     => 'Welding',
        'title'    => 'Trade-Standard<br>Welding',
        'tagline'  => 'Strong Joins,<br>Clean Finish',
        'summary'  => 'MIG, TIG and stick welding carried out to trade standard on every structural and decorative job.',
        'intro'    => [
            'Welding is the backbone of every fabrication we produce. We carry out MIG, TIG and stick welding to trade standard on structural, architectural and decorative work.',
            'Every weld is inspected before it\'s ground back and finished, so strength is never traded for appearance. We weld in our Carrum Downs workshop and on site across Melbourne.',
        ],
        'features' => ['MIG, TIG &amp; stick welding', 'Steel, stainless &amp; aluminium', 'Structural &amp; architectural work', 'On-site &amp; mobile welding', 'Repairs &amp; modifications', 'Ground-back, clean finishes'],
        'caption'  => ['Trade Standard', 'Workshop &amp; On Site'],
        'uses'     => [['Structural', 'building'], ['On-Site', 'weld'], ['Custom Pieces', 'sparkle']],
        'images'   => [21, 17, 19],
    ],
];

// ── Projects / specialisation ───────────────
$tl_projects = [
    'metal' => [
        'slug'     => 'metal-projects',
        'name'     => 'Metal',
        'title'    => 'Metal<br>Projects',
        'tagline'  => 'Custom Metalwork<br>Built To Last',
        'heading'  => 'Metalwork',
        'intro'    => [
            'Metal is at the heart of everything we do. From structural frames and wrought iron gates to architectural cladding and laser-cut screens, True-Line Installs designs, fabricates and installs custom metalwork for homes and businesses across Melbourne.',
            'Every project is built in our Carrum Downs workshop using proper trade equipment, then installed by the same team that made it — so the finished result matches the design, first time.',
        ],
        'caption'  => ['Custom Metalwork', 'Fabricated &amp; Installed'],
        'images'   => [18, 14, 11],
        'items'    => [
            ['Facade Screening', 'Aluminium Battens', 18, 'wall-cladding'],
            ['Slat Gates', 'Welded &amp; Powder Coated', 17, 'welding'],
            ['Privacy Screens', 'Aluminium Slats', 12, 'metal-grilles'],
            ['Planter Boxes', 'Perforated &amp; Folded Steel', 5, 'custom-metal-finishes'],
            ['Juliet Balconies', 'Wrought Iron', 30, 'wrought-iron'],
            ['Fencing', 'Slat &amp; Picket', 27, 'materials-metal-fabrication'],
        ],
        'uses'     => [['Welding', 'weld', 'welding'], ['Laser Cutting', 'cut', 'laser-cutting'], ['Wrought Iron', 'gate', 'wrought-iron']],
    ],
    'glass' => [
        'slug'     => 'glass-projects',
        'name'     => 'Glass',
        'title'    => 'Glass<br>Projects',
        'tagline'  => 'Metal &amp; Glass<br>Working Together',
        'heading'  => 'Glasswork',
        'intro'    => [
            'Metal and glass are a natural pairing. True-Line Installs fabricates the steel and aluminium frames, posts and fixings that hold glass in place, and installs the complete system — frameless pool fencing, balcony balustrades, spa enclosures and shower screens.',
            'Because we build the metalwork ourselves, every frame is made to suit the glass exactly. The result is a clean, precise install that looks sharp and stays safe for years.',
        ],
        'caption'  => ['Metal &amp; Glass', 'Framed &amp; Installed'],
        'images'   => [25, 1, 32],
        'items'    => [
            ['Glass Pool Fencing', 'Frameless Glass', 23, null],
            ['Glass Balustrades', 'Balconies &amp; Decks', 26, null],
            ['Spa Enclosures', 'Frameless Glass', 33, null],
            ['Shower Screens', 'Frameless Glass', 28, null],
            ['Balcony Glass', 'Double-Storey Homes', 7, null],
            ['Pool Fence &amp; Posts', 'Glass &amp; Aluminium', 8, null],
        ],
        'uses'     => [['Wall Cladding', 'building', 'wall-cladding'], ['Water-Jet Cutting', 'window', 'water-jet-cutting'], ['Custom Finishes', 'sparkle', 'custom-metal-finishes']],
    ],
];

// ── Social profiles ─────────────────────────
// Paste the full profile URL to show an icon; empty ones are hidden.
$tl_social = [
    'Facebook'  => '',
    'LinkedIn'  => '',
    'Twitter'   => '',
    'Pinterest' => '',
    'Instagram' => '',
];

// ── Line icons (48×48, stroke) ───────────────
function tl_icon(string $key): string
{
    $paths = [
        'cut'      => '<path d="M30 8l10 10-14 14-10-10z"/><path d="M16 22L8 30"/><path d="M8 30l-1 8 8-1"/><path d="M12 34l3 3M16 30l3 3"/>',
        'weld'     => '<path d="M10 38l10-10"/><path d="M20 28l8-8 4 4-8 8"/><path d="M30 12l4-4M34 16l4-2M32 8l2 4"/><path d="M8 40h10"/>',
        'engrave'  => '<path d="M32 8l8 8-18 18-8 2 2-8z"/><rect x="8" y="32" width="26" height="8" rx="1"/><path d="M13 36h6M22 36h6"/>',
        'building' => '<rect x="12" y="8" width="24" height="32"/><path d="M18 14h4M26 14h4M18 21h4M26 21h4M18 28h4M26 28h4M22 40v-6h4v6"/>',
        'home'     => '<path d="M8 22L24 9l16 13"/><path d="M12 19v19h24V19"/><path d="M20 38V28h8v10"/>',
        'gate'     => '<path d="M10 40V20a14 14 0 0 1 28 0v20"/><path d="M17 40V13M24 40V10M31 40V13M10 30h28"/>',
        'sign'     => '<rect x="8" y="12" width="32" height="18" rx="1"/><path d="M14 18h20M14 24h12M24 30v10M18 40h12"/>',
        'gear'     => '<circle cx="24" cy="24" r="6"/><path d="M24 8v6M24 34v6M8 24h6M34 24h6M12.7 12.7l4.2 4.2M31.1 31.1l4.2 4.2M12.7 35.3l4.2-4.2M31.1 16.9l4.2-4.2"/>',
        'layers'   => '<path d="M8 30l16 8 16-8"/><path d="M8 22l16 8 16-8"/><path d="M8 14l16-6 16 6-16 8z"/>',
        'sparkle'  => '<path d="M24 8l3 10 10 3-10 3-3 10-3-10-10-3 10-3z"/><path d="M38 34l1 3 3 1-3 1-1 3-1-3-3-1 3-1z"/>',
        'shield'   => '<path d="M24 8l14 5v10c0 9-6 15-14 18-8-3-14-9-14-18V13z"/><path d="M18 24l4 4 8-8"/>',
        'ruler'    => '<rect x="6" y="18" width="36" height="12" rx="1"/><path d="M12 18v5M18 18v3M24 18v5M30 18v3M36 18v5"/>',
        'window'   => '<rect x="10" y="8" width="28" height="32"/><path d="M24 8v32M10 24h28M15 13l5 5"/>',
        'phone'    => '<path d="M14 8h6l3 8-4 3a22 22 0 0 0 10 10l3-4 8 3v6a3 3 0 0 1-3 3C21 37 11 27 11 11a3 3 0 0 1 3-3z"/>',
        'mail'     => '<rect x="7" y="12" width="34" height="24" rx="1"/><path d="M7 13l17 13 17-13"/>',
        'pin'      => '<path d="M24 42s13-12 13-22a13 13 0 0 0-26 0c0 10 13 22 13 22z"/><circle cx="24" cy="20" r="5"/>',
        'clock'    => '<circle cx="24" cy="24" r="16"/><path d="M24 14v10l7 5"/>',
        'stairs'   => '<path d="M8 40h8v-8h8v-8h8v-8h8"/><path d="M12 40V26M20 32V18M28 24V10"/>',
    ];
    return '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">'
        . ($paths[$key] ?? $paths['sparkle']) . '</svg>';
}
