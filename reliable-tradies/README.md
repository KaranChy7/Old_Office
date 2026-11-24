# Reliable Tradies Group — Website

**Company:** Reliable Tradies Group  
**Location:** Salisbury SA 5108  
**Services:** Painting · Tiling · Flooring · Concrete  
**Phone:** 0470 366 620  
**ABN:** 41 103 231 058

---

## Project Structure

```
public/
├── ./               ← Homepage
├── about_us            ← About page
├── our_services        ← Services page
├── contact_us          ← Contact page
├── quote               ← Free quote page
├── includes/
│   ├── header.php          ← ⭐ ALL PHP VARIABLES HERE
│   ├── footer.php
│   └── home/               ← Home section partials
├── scss/                   ← Modular SCSS source
├── css/style.css           ← Compiled CSS (output)
├── js/main.js              ← Vanilla JavaScript
└── images/                 ← Add your images here
```

---

## Setup & Development

### Install dependencies

```bash
npm install
```

### Compile SCSS once

```bash
npx sass public/scss/style.scss public/css/style.css --no-source-map
```

### Watch SCSS

```bash
npx sass --watch public/scss/style.scss:public/css/style.css --no-source-map
```

### With Gulp (after `npm install gulp gulp-sass sass gulp-postcss autoprefixer gulp-clean-css`)

```bash
gulp          # compile SCSS once
gulp watch    # watch SCSS
gulp php      # compile PHP to HTML
```

---

## Required Images

Add the following images to `public/images/`:

| Filename               | Usage                        |
| ---------------------- | ---------------------------- |
| `logo.png`             | Header logo (light bg)       |
| `logo-white.png`       | Footer logo (dark bg)        |
| `favicon.png`          | Browser tab icon             |
| `hero-main.jpg`        | Hero section right panel     |
| `hero-bg.jpg`          | Hero background texture      |
| `about-main.jpg`       | About section main photo     |
| `about-accent.jpg`     | About section accent photo   |
| `about-story.jpg`      | About page story image       |
| `cta-bg.jpg`           | CTA section background       |
| `service-painting.jpg` | Painting service card        |
| `service-tiling.jpg`   | Tiling service card          |
| `service-flooring.jpg` | Flooring service card        |
| `service-concrete.jpg` | Concrete service card        |
| `gallery-01.jpg`       | Gallery — painting interior  |
| `gallery-02.jpg`       | Gallery — bathroom tiling    |
| `gallery-03.jpg`       | Gallery — hardwood flooring  |
| `gallery-04.jpg`       | Gallery — concrete driveway  |
| `gallery-05.jpg`       | Gallery — exterior painting  |
| `gallery-06.jpg`       | Gallery — kitchen splashback |

**Recommended sizes:** Hero: 900×700px · Service cards: 600×400px · Gallery: 800×600px

---

## Updating Business Info

**All company info is in one place only:**

```
public/includes/header.php  (top of file)
```

Edit variables like `$phone`, `$email`, `$address`, `$hours`, `$services[]` etc.

**Never hardcode business info** directly into section PHP files.

---

## Design

- **Fonts:** Cormorant Garamond (display/headings) + DM Sans (body)
- **Primary color:** `#1C1C1E` (deep charcoal)
- **Accent color:** `#D4842A` (warm amber)
- **Background:** `#F5F2EE` (warm off-white)
- **Direction:** Premium Industrial-Craft

---

## SCSS Architecture

```
scss/
├── base/
│   ├── _variables.scss     ← Brand colours, fonts, radius
│   └── _mixins.scss        ← custom_max, custom_min, placeholder, clear
├── modules/                ← Reusable: common, forms, buttons, etc.
├── includes/               ← _header.scss, _footer.scss
├── pages/
│   ├── home/               ← One file per home section
│   └── _about-page.scss    ← Inner page styles
└── style.scss              ← Entry point — imports all partials
```
