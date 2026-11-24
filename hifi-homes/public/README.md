# MJR&D Constructions PTY LTD — Website

## Business Details
- **Business:** MJR&D Constructions PTY LTD
- **ABN:** 84 668 634 553
- **Address:** Cranbourne East VIC 3977
- **Phone:** 0413 613 484
- **Email:** mjrshepherd@mail.com
- **Hours:** Mon–Fri 8:00 AM – 4:00 PM
- **Services:** Carpentry, Handyman
- **Service Radius:** 50km from Cranbourne East

## Design Strategy
- **Direction:** Bold Industrial-Premium
- **Colors:** Deep Navy (#1A2E4A), Mid Blue (#2B5EA7), Creamy White (#F5F0E8), Gold (#C9A84C)
- **Fonts:** Oswald (display/headings) + Inter (body)
- **Signature Element:** Diagonal slash motif recurring through logo, hero, and section dividers

## Project Structure
```
mjrd-constructions/
├── index.php           — Homepage
├── about.php           — About page
├── services.php        — Services page
├── gallery.php         — Gallery page
├── contact.php         — Contact & quote form
├── includes/
│   ├── head.php        — HTML head / meta
│   ├── header.php      — Top bar + navigation
│   ├── footer.php      — Footer
│   └── scripts.php     — JS + closing tags
├── assets/
│   ├── scss/
│   │   ├── main.scss               — Entry point
│   │   ├── base/
│   │   │   ├── _variables.scss
│   │   │   ├── _reset.scss
│   │   │   └── _mixins.scss
│   │   └── modules/
│   │       ├── _header.scss
│   │       ├── _hero.scss
│   │       ├── _about.scss
│   │       ├── _services.scss
│   │       └── _sections.scss      — Gallery, testimonials, FAQ, CTA, contact, footer
│   ├── css/
│   │   └── main.min.css            — Compiled output
│   └── js/
│       └── main.js                 — Vanilla JS (nav, scroll, counters, FAQ, form)
├── package.json
├── gulpfile.js
└── README.md
```

## Build Commands
```bash
# Install dependencies
npm install

# Compile SCSS (once)
npm run build

# Watch SCSS for changes
npm run dev
```

## Pages
| File | Route | Description |
|------|-------|-------------|
| index.php | / | Homepage with hero, about, services, gallery, testimonials, FAQ, CTA |
| about.php | /about | Full about page |
| services.php | /services | Detailed services breakdown |
| gallery.php | /gallery | Filterable masonry gallery |
| contact.php | /contact | Contact details + quote request form |
