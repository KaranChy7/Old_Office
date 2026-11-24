# GC-E Campers — Website

Premium electric & hybrid camper hire and custom fit-outs.
Built with PHP + modular SCSS architecture.

---

## Project Structure

```
public/
├── index.php                   ← Home page
├── camper_hire.php             ← Hire fleet page
├── fit_outs.php                ← Custom fit-outs page
├── about_us.php                ← About page
├── gallery.php                 ← Gallery page
├── contact_us.php              ← Contact page
├── quote.php                   ← Quote / booking enquiry
│
├── includes/
│   ├── header.php              ← Shared header + nav
│   ├── footer.php              ← Shared footer
│   │
│   ├── home/
│   │   ├── hero.php
│   │   ├── marquee.php
│   │   ├── fleet.php
│   │   ├── fitouts.php
│   │   ├── stats.php
│   │   ├── gallery_strip.php
│   │   ├── how_it_works.php
│   │   ├── testimonials.php
│   │   └── cta_banner.php
│   │
│   ├── about/
│   │   ├── story.php
│   │   ├── values.php
│   │   └── workshop.php
│   │
│   ├── services/
│   │   ├── hire_vehicles.php
│   │   ├── hire_includes.php
│   │   ├── fitout_packages.php
│   │   └── fitout_process.php
│   │
│   ├── gallery/
│   │   └── gallery_grid.php
│   │
│   └── contact/
│       └── contact_main.php
│
├── scss/
│   ├── style.scss              ← Entry point, imports everything
│   │
│   ├── base/
│   │   ├── _variables.scss     ← Colors, fonts, spacing tokens
│   │   ├── _reset.scss         ← CSS reset + base elements
│   │   └── _mixins.scss        ← Reusable mixins
│   │
│   ├── module/                 ← REUSABLE MODULES
│   │   ├── _typography.scss    ← All text styles
│   │   ├── _common.scss        ← Containers, buttons, utilities
│   │   ├── _component.scss     ← Cards, badges, CTAs, stats
│   │   └── _forms.scss         ← All form styles
│   │
│   ├── includes/
│   │   ├── _header.scss
│   │   └── _footer.scss
│   │
│   └── pages/
│       ├── _home.scss          ← Home-specific sections
│       └── _inner.scss         ← All inner page styles
│
├── css/
│   └── style.css               ← Compiled from SCSS (do not edit)
│
├── js/
│   └── main.js                 ← All interactions & animations
│
├── images/                     ← Place your images here (see below)
└── fonts/                      ← Optional local fonts
```

---

## Required Images

Place the following images into `public/images/`:

| Filename               | Recommended size | Used in                        |
|------------------------|------------------|--------------------------------|
| hero-bg.jpg            | 1920×1080        | Home hero background           |
| vw-buzz.jpg            | 900×600          | Fleet cards & hire page        |
| mini-countryman.jpg    | 900×600          | Fleet cards & hire page        |
| fitout-interior.jpg    | 900×700          | Fit-outs teaser & packages     |
| fitout-workshop.jpg    | 900×700          | Fit-outs teaser accent image   |
| fitout-solar.jpg       | 900×600          | Fit-out package card           |
| fitout-weekend.jpg     | 900×600          | Fit-out package card           |
| parallax-bg.jpg        | 1920×900         | CTA parallax banner            |
| about-hero.jpg         | 1920×800         | About page hero                |
| about-story.jpg        | 800×1000         | About story section            |
| workshop-exterior.jpg  | 1920×900         | Workshop parallax banner       |
| hire-hero.jpg          | 1920×800         | Hire page hero                 |
| fitout-hero.jpg        | 1920×800         | Fit-outs page hero             |
| contact-hero.jpg       | 1920×800         | Contact page hero              |
| quote-hero.jpg         | 1920×800         | Quote page hero                |
| gallery-hero.jpg       | 1920×800         | Gallery page hero              |
| gallery-1.jpg          | 800×600          | Gallery strip & grid           |
| gallery-2.jpg          | 800×600          | Gallery strip & grid           |
| gallery-3.jpg          | 800×600          | Gallery strip & grid           |
| gallery-4.jpg          | 800×600          | Gallery strip & grid           |
| gallery-5.jpg → 12.jpg | 800×600          | Full gallery grid              |

---

## Design System

### Colors
| Token           | Value     | Usage                        |
|-----------------|-----------|------------------------------|
| $color-black    | #0a0a0a   | Page background              |
| $color-dark     | #111111   | Section alternate bg         |
| $color-gold     | #c9a84c   | Primary brand accent         |
| $color-gold-light | #e2bf72 | Gradient highlight           |
| $color-white    | #ffffff   | Primary text                 |
| $color-gray-mid | #888888   | Body text, secondary         |

### Fonts
- **Barlow Condensed** — Headings, nav, labels (Google Fonts)
- **Cormorant Garamond** — Display, hero taglines (Google Fonts)
- **Jost** — Body text (Google Fonts)

### Buttons
```html
<a href="#" class="btn btn--gold">Primary CTA</a>
<a href="#" class="btn btn--outline">Secondary</a>
<a href="#" class="btn btn--ghost">Ghost / overlay</a>
```

### Scroll Animations
Add `data-animate` to any element to trigger fade-up on scroll.
Variants: `data-animate="fade-left"`, `data-animate="fade-right"`, `data-animate="scale"`

---

## Compiling SCSS

```bash
# Install Sass CLI
npm install -g sass

# One-time compile
sass scss/style.scss css/style.css

# Watch mode (during development)
sass --watch scss/style.scss:css/style.css
```

---

## Running Locally

Requires a local PHP server (XAMPP, Laragon, MAMP, or PHP built-in):

```bash
cd public
php -S localhost:8000
```

Then open `http://localhost:8000` in your browser.

---

## Contact Form / Quote Form

Currently the forms use front-end JS simulation. To connect to a real backend:

1. Create `process_contact.php` and `process_quote.php` in `public/`
2. Update the `form` tags to `action="process_contact.php" method="POST"`
3. Remove the JS submit handler for those forms
4. Handle via PHP (mail(), PHPMailer, or SMTP)

---

## Notes
- All inline style attributes on section wrappers are intentional overrides where a full SCSS class would be wasteful
- `data-animate` elements need at least 15% in viewport before triggering — adjust threshold in `main.js` if needed
- The gallery lightbox and filter tabs are fully self-contained in `gallery_grid.php`
