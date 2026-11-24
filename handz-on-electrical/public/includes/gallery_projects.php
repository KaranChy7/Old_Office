<?php
// Gallery list. The first 6 also show on the home page.
//
// To add a real job:
//   1. Put the photos in images/gallery/originals/ and run: npx gulp images
//   2. Add an entry like this (leave out 'before' if there is no before photo):
//
//      [
//          'service'  => 'Landscaping',
//          'title'    => 'Front garden makeover',
//          'location' => 'Walloon',
//          'before'   => 'front-garden-before',
//          'after'    => 'front-garden-after',
//      ],
//
//   3. Rebuild with: npx gulp html
//
// The placeholders below are stock photos, not Hortsol jobs, so they have no captions.
// Delete them once real jobs are added.

$gallery_projects = [
    ['after' => 'placeholders/gallery1'],
    ['after' => 'placeholders/gallery2'],
    ['after' => 'placeholders/gallery3'],
    ['after' => 'placeholders/gallery4'],
    ['after' => 'placeholders/gallery5'],
    ['after' => 'placeholders/gallery6'],
    ['after' => 'placeholders/gallery7'],
    ['after' => 'placeholders/gallery8'],
    ['after' => 'placeholders/gallery9'],
    ['after' => 'placeholders/gallery10'],
    ['after' => 'placeholders/gallery11'],
    ['after' => 'placeholders/gallery12'],
];
