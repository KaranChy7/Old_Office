<?php
// Font Awesome icons by short name, e.g. echo icon('phone');
function icon($name, $class = 'icon')
{
    $icons = [
        'phone'     => 'fa-solid fa-phone',
        'mail'      => 'fa-solid fa-envelope',
        'pin'       => 'fa-solid fa-location-dot',
        'map'       => 'fa-solid fa-map-location-dot',
        'clock'     => 'fa-regular fa-clock',
        'calendar'  => 'fa-regular fa-calendar',
        'check'     => 'fa-solid fa-circle-check',
        'arrow'     => 'fa-solid fa-arrow-right',
        'chevron'   => 'fa-solid fa-chevron-down',
        'send'      => 'fa-solid fa-paper-plane',
        'home'      => 'fa-solid fa-house',
        'shield'    => 'fa-solid fa-shield-halved',
        'heart'     => 'fa-solid fa-heart',
        'broom'     => 'fa-solid fa-broom',
        'book'      => 'fa-solid fa-book-open',
        'list'      => 'fa-solid fa-list-check',
        'city'      => 'fa-solid fa-city',
        'award'     => 'fa-solid fa-award',
        'id'        => 'fa-solid fa-id-card',
        'globe'     => 'fa-solid fa-globe',
        'sparkle'   => 'fa-solid fa-wand-magic-sparkles',
        'office'    => 'fa-solid fa-briefcase',
        'key'       => 'fa-solid fa-key',
        'hands'     => 'fa-solid fa-hand-holding-heart',
        'boxes'     => 'fa-solid fa-boxes-stacked',
        'spray'     => 'fa-solid fa-spray-can-sparkles',
        'rug'       => 'fa-solid fa-rug',
        'window'    => 'fa-solid fa-table-cells-large',
        'residence' => 'fa-solid fa-house-chimney',
        'building'  => 'fa-solid fa-building',
        'sms'       => 'fa-solid fa-comment-sms',
        'star'      => 'fa-solid fa-star',
    ];

    return '<i class="' . ($icons[$name] ?? 'fa-solid fa-circle') . ' ' . $class . '" aria-hidden="true"></i>';
}

// The 10 services, shared by the header dropdown, home page, services page and service pages
$services = [
    [
        'slug' => 'office-cleaning', 'icon' => 'office', 'title' => 'Office Cleaning', 'tag' => 'Commercial',
        'desc' => 'Office cleaning in Sydney and Bankstown for workspaces, meeting rooms, kitchens and bathrooms.',
        'meta' => 'Office cleaning in Sydney and Bankstown. Available 24 hours, 7 days a week, fully insured, with 15+ years experience. Call for a quote.',
        'intro' => [
            'A clean office is a better place to work and a better place to welcome clients. Old School Cleaning &amp; Maintenance Services provides office cleaning across Sydney, Bankstown and surrounding areas, looking after desks, floors, kitchens and bathrooms so your workplace stays fresh and presentable.',
            'Because we are available 24 hours a day, 7 days a week, we can clean before your team arrives, after they leave or over the weekend, so the work gets done without disrupting your business.',
        ],
        'points' => ['Workstations and desks', 'Meeting rooms and reception areas', 'Office kitchens and break rooms', 'Bathrooms', 'Floors, vacuuming and mopping'],
    ],
    [
        'slug' => 'end-of-lease-cleaning', 'icon' => 'key', 'title' => 'End of Lease Cleaning', 'tag' => 'Residential',
        'desc' => 'End of lease cleaning in Sydney and Bankstown to leave your rental property clean when you move out.',
        'meta' => 'End of lease cleaning in Sydney and Bankstown. Fully insured, 15+ years experience, available 24/7. Call Old School Cleaning for a quote.',
        'intro' => [
            'Moving out is busy enough without having to clean the whole property yourself. Our end of lease cleaning service covers your rental home from room to room across Sydney, Bankstown and surrounding areas, so you can hand back the keys with confidence.',
            'With more than 15 years of cleaning experience and availability 24 hours a day, 7 days a week, we can work around your moving date and fit in with your schedule.',
        ],
        'points' => ['Kitchens', 'Bathrooms and laundries', 'Bedrooms and living areas', 'Floors and carpets', 'Windows'],
    ],
    [
        'slug' => 'assistance-with-daily-activities', 'icon' => 'hands', 'title' => 'Assistance with Daily Activities', 'tag' => 'Residential',
        'desc' => 'Helping hands around the home with everyday activities across Sydney and Bankstown.',
        'meta' => 'Assistance with daily activities in Sydney and Bankstown. A friendly, fully insured local team available 24 hours, 7 days a week.',
        'intro' => [
            'Sometimes everyday tasks around the home need an extra pair of hands. Old School Cleaning &amp; Maintenance Services offers assistance with daily activities for households in Sydney, Bankstown and surrounding areas.',
            'Our team is available 24 hours a day, 7 days a week, so support can be arranged at times that suit you. Call us to talk about what help you need.',
        ],
        'points' => ['Help with everyday tasks at home', 'Support at times that suit you', 'Available 24 hours, 7 days a week', 'Fully insured team', 'Sydney, Bankstown and surrounding areas'],
    ],
    [
        'slug' => 'organizational-cleaning', 'icon' => 'boxes', 'title' => 'Organizational Cleaning', 'tag' => 'Residential &amp; Commercial',
        'desc' => 'Cleaning and organising cluttered spaces so homes and workplaces are tidy and easy to use.',
        'meta' => 'Organizational cleaning in Sydney and Bankstown for homes and businesses. 15+ years experience, fully insured, available 24/7.',
        'intro' => [
            'Clutter makes any space harder to clean and harder to live or work in. Our organizational cleaning service brings order back to cluttered rooms, cupboards and storage areas in homes and businesses across Sydney and Bankstown.',
            'We clean as we organise, so you are left with a space that is both tidy and clean. Bookings are available 24 hours a day, 7 days a week.',
        ],
        'points' => ['Cluttered rooms tidied and organised', 'Cupboards and storage areas', 'Homes and workplaces', 'Cleaning as we organise', 'Available 24/7'],
    ],
    [
        'slug' => 'house-cleaning', 'icon' => 'home', 'title' => 'House Cleaning', 'tag' => 'Residential',
        'desc' => 'House cleaning in Sydney and Bankstown covering kitchens, bathrooms, bedrooms and living areas.',
        'meta' => 'House cleaning in Sydney and Bankstown. Experienced, fully insured cleaners available 24 hours, 7 days a week. Call for a quote.',
        'intro' => [
            'Coming home to a clean house makes a real difference. Old School Cleaning &amp; Maintenance Services provides house cleaning across Sydney, Bankstown and surrounding areas, taking care of the rooms you use every day.',
            'With 15+ years of experience and availability 24 hours a day, 7 days a week, we make it easy to keep your home clean without giving up your free time.',
        ],
        'points' => ['Kitchens', 'Bathrooms', 'Bedrooms', 'Living areas', 'Floors, vacuuming and mopping'],
    ],
    [
        'slug' => 'all-types-of-cleaning', 'icon' => 'spray', 'title' => 'All Types of Cleaning', 'tag' => 'Residential &amp; Commercial',
        'desc' => 'Whatever needs cleaning, one call covers residential and commercial cleaning across Sydney.',
        'meta' => 'All types of cleaning for homes and businesses in Sydney and Bankstown. 15+ years experience, fully insured, open 24 hours, 7 days.',
        'intro' => [
            'Not every cleaning job fits neatly into one category. Old School Cleaning &amp; Maintenance Services handles all types of cleaning for homes and businesses in Sydney, Bankstown and surrounding areas.',
            'Tell us what needs cleaning and we will take care of it. With more than 15 years of experience, a fully insured team and availability 24/7, one call is all it takes.',
        ],
        'points' => ['Residential cleaning', 'Commercial cleaning', 'One-off and regular cleans', 'Available 24 hours, 7 days a week', 'Fully insured'],
    ],
    [
        'slug' => 'carpet-cleaning', 'icon' => 'rug', 'title' => 'Carpet Cleaning', 'tag' => 'Residential &amp; Commercial',
        'desc' => 'Carpet cleaning in Sydney and Bankstown for homes, rentals and commercial spaces.',
        'meta' => 'Carpet cleaning in Sydney and Bankstown for homes and businesses. Fully insured, 15+ years experience, available 24 hours, 7 days.',
        'intro' => [
            'Carpets hold on to dust, dirt and everyday marks. Our carpet cleaning service refreshes carpets in homes, rental properties and commercial spaces across Sydney, Bankstown and surrounding areas.',
            'Carpet cleaning can be booked on its own or together with house, end of lease or commercial cleaning. We are available 24 hours a day, 7 days a week.',
        ],
        'points' => ['Bedrooms and living areas', 'Hallways and stairs', 'Rental properties', 'Offices and commercial spaces', 'Book alone or with other services'],
    ],
    [
        'slug' => 'window-cleaning', 'icon' => 'window', 'title' => 'Window Cleaning', 'tag' => 'Residential &amp; Commercial',
        'desc' => 'Window cleaning in Sydney and Bankstown for clear, streak-free glass at home or work.',
        'meta' => 'Window cleaning in Sydney and Bankstown for homes and businesses. Fully insured, 15+ years experience, available 24/7.',
        'intro' => [
            'Clean windows let in more light and make any property look cared for. Old School Cleaning &amp; Maintenance Services provides window cleaning for homes and businesses across Sydney, Bankstown and surrounding areas.',
            'We clean glass, frames and sills, and window cleaning can be added to any house, end of lease or commercial clean. Call us any time, 24 hours a day, 7 days a week.',
        ],
        'points' => ['Glass cleaned streak-free', 'Frames and sills wiped', 'Homes and rental properties', 'Shopfronts and offices', 'Add to any other clean'],
    ],
    [
        'slug' => 'residential-cleaning', 'icon' => 'residence', 'title' => 'Residential Cleaning', 'tag' => 'Residential',
        'desc' => 'Residential cleaning for houses, units and apartments in Sydney, Bankstown and surrounding areas.',
        'meta' => 'Residential cleaning in Sydney and Bankstown for houses, units and apartments. 15+ years experience, fully insured, available 24/7.',
        'intro' => [
            'Every home is different, and so is every residential cleaning job. We clean houses, units and apartments across Sydney, Bankstown and surrounding areas, focusing on the areas that matter most to you.',
            'Our residential cleaning service is backed by more than 15 years of experience. We are fully insured and available 24 hours a day, 7 days a week.',
        ],
        'points' => ['Houses, units and apartments', 'Kitchens and bathrooms', 'Bedrooms and living areas', 'Carpets and windows on request', 'One-off or regular cleans'],
    ],
    [
        'slug' => 'commercial-cleaning', 'icon' => 'building', 'title' => 'Commercial Cleaning', 'tag' => 'Commercial',
        'desc' => 'Commercial cleaning in Sydney and Bankstown for businesses, shops and shared spaces.',
        'meta' => 'Commercial cleaning in Sydney and Bankstown. Fully insured, 15+ years experience, available 24 hours, 7 days a week to suit your business.',
        'intro' => [
            'A clean business makes a strong first impression. Old School Cleaning &amp; Maintenance Services provides commercial cleaning for businesses, shops and shared spaces across Sydney, Bankstown and surrounding areas.',
            'Because we work 24 hours a day, 7 days a week, we can clean outside your trading hours. Our team is fully insured and brings more than 15 years of cleaning experience to every job.',
        ],
        'points' => ['Shops and retail spaces', 'Offices and workplaces', 'Shared and common areas', 'Bathrooms and kitchens', 'Cleaning outside trading hours'],
    ],
];

// Look up one service by its slug
function find_service($services, $slug)
{
    foreach ($services as $service) {
        if ($service['slug'] === $slug) {
            return $service;
        }
    }
    return null;
}
