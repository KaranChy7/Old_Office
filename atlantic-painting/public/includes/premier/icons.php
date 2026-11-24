<?php
// Inline SVG icon set for the Premier Painting layout.
// Usage: echo pp_icon('home');
function pp_icon(string $name, string $class = ''): string
{
    $stroke = [
        'home'      => '<path d="M3 10.5 12 3l9 7.5"/><path d="M5 9.5V21h14V9.5"/><path d="M10 21v-6h4v6"/>',
        'building'  => '<rect x="4.5" y="3" width="15" height="18" rx="1"/><path d="M8.5 7h2M13.5 7h2M8.5 11h2M13.5 11h2M8.5 15h2M13.5 15h2M10.5 21v-3h3v3"/>',
        'fence'     => '<path d="M4 21V7.5l2-2.5 2 2.5V21M10 21V7.5l2-2.5 2 2.5V21M16 21V7.5l2-2.5 2 2.5V21"/><path d="M2.5 10.5h19M2.5 16h19"/>',
        'roller'    => '<rect x="3" y="3" width="15" height="6" rx="1.5"/><path d="M18 6h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-8v3"/><rect x="10.5" y="14" width="3" height="7" rx="1"/>',
        'shield'    => '<path d="M12 3l8 3v6c0 5-3.5 8-8 9-4.5-1-8-4-8-9V6z"/><path d="M8.5 12l2.5 2.5 4.5-5"/>',
        'sparkles'  => '<path d="M11 3l1.8 4.7 4.7 1.8-4.7 1.8L11 16l-1.8-4.7L4.5 9.5l4.7-1.8z"/><path d="M18.5 14l.8 2.2 2.2.8-2.2.8-.8 2.2-.8-2.2-2.2-.8 2.2-.8z"/><path d="M5.5 16.5l.6 1.4 1.4.6-1.4.6-.6 1.4-.6-1.4-1.4-.6 1.4-.6z"/>',
        'dollar'    => '<path d="M12 2.5v19M16.5 6.5c-.8-1.4-2.4-2.3-4.5-2.3-2.8 0-4.6 1.4-4.6 3.5s1.8 3 4.6 3.8 4.6 1.8 4.6 4-1.8 3.7-4.6 3.7c-2.2 0-3.9-.9-4.7-2.4"/>',
        'calendar'  => '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/><path d="M7 13.5h2M11 13.5h2M15 13.5h2M7 17h2M11 17h2M15 17h2"/>',
        'chat'      => '<path d="M12 4c5 0 9 3.1 9 7s-4 7-9 7c-1 0-2-.1-2.9-.4L4.5 19.5l1.3-3.6C4.1 14.6 3 12.9 3 11c0-3.9 4-7 9-7z"/>',
        'palette'   => '<path d="M12 3a9 9 0 1 0 0 18c1.1 0 1.8-.8 1.8-1.7 0-.5-.2-.9-.5-1.2-.3-.3-.5-.7-.5-1.2 0-.9.8-1.7 1.7-1.7h2.1a4.4 4.4 0 0 0 4.4-4.4C21 6.5 17 3 12 3z"/><circle cx="7.5" cy="11.5" r="1.3"/><circle cx="10" cy="7.5" r="1.3"/><circle cx="14.5" cy="7.5" r="1.3"/><circle cx="17" cy="11" r="1.3"/>',
        'brush'     => '<rect x="4" y="2.5" width="13" height="5.5" rx="1.2"/><path d="M17 5.2h2.5V10H10.5v3"/><path d="M9 13h3v2.5l-.6 6h-1.8L9 15.5z"/>',
        'chevron'   => '<path d="M9 6l6 6-6 6"/>',
        'check'     => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
    ];

    $fill = [
        'phone'    => '<path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.36 11.36 0 003.57.57 1 1 0 011 1V20a1 1 0 01-1 1C10.61 21 3 13.39 3 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.57 1 1 0 01-.25 1.01l-2.2 2.21z"/>',
        'star'     => '<path d="M12 2.5l2.9 6 6.6.9-4.8 4.6 1.2 6.5L12 17.4l-5.9 3.1 1.2-6.5L2.5 9.4l6.6-.9z"/>',
        'mail'     => '<path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5-8-5V6l8 5 8-5z"/>',
        'pin'      => '<path d="M12 2a8 8 0 00-8 8c0 5.4 8 12 8 12s8-6.6 8-12a8 8 0 00-8-8zm0 11a3 3 0 110-6 3 3 0 010 6z"/>',
    ];

    $cls = $class ? ' class="' . $class . '"' : '';

    if (isset($fill[$name])) {
        return '<svg' . $cls . ' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">' . $fill[$name] . '</svg>';
    }

    return '<svg' . $cls . ' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . ($stroke[$name] ?? '') . '</svg>';
}

