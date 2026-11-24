# Evergreen Tree Nursery eCommerce Starter

A responsive PHP eCommerce starter built from the supplied tree-nursery website brief. It uses JSON files for storage, so it does not require MySQL or SQLite.

## Included

- Responsive home, shop, category, product, about, services, service detail, contact, cart, checkout, confirmation, account, wishlist, FAQ and policy pages
- 13 product categories plus the aggregate **All** view, with five sample products in every actual category (65 products total)
- Live product search suggestions
- Product filters and sorting
- Wishlist, session cart, quantities, coupon codes, delivery calculation and guest checkout
- Customer registration, login and order history
- Order storage, automatic inventory reduction and out-of-stock controls
- Customer and business email logging, with optional PHP `mail()` delivery
- Administration dashboard for products, stock, orders, customers, enquiries, settings, payments and delivery
- Dynamic XML sitemap, robots file, JSON-LD local-business/product schema, CSRF protection and form validation
- Mobile fixed navigation with direct calling
- Generated local SVG product and nursery artwork; no external image dependency

## Requirements

- PHP 8.1 or newer
- A web server such as Apache, Nginx, XAMPP, MAMP or PHP’s development server
- Write permission for the `data/` directory

No PHP database extension is required.

## Quick Start

From the project directory:

```bash
php -S localhost:8000 router.php
```

Open:

```text
http://localhost:8000
```

Admin dashboard:

```text
http://localhost:8000/admin.php
```

## Admin Login

Set `ADMIN_USERNAME` and `ADMIN_PASSWORD` in the PHP process environment. Admin login is disabled if either value is missing or empty. Do not save real credentials in repository files.

For PHP's built-in server in PowerShell:

```powershell
$env:ADMIN_USERNAME = "your-admin-user"
$env:ADMIN_PASSWORD = "replace-with-a-long-random-password"
php -S localhost:8000 router.php
```

For Apache/XAMPP, configure `ADMIN_USERNAME` and `ADMIN_PASSWORD` in the local Apache server configuration (for example, with `SetEnv` in a local virtual host), then restart Apache.

## Business Details

Update business details in **Admin → Settings**. You can also change initial defaults in `config.php`.

## Demo Coupons

- `WELCOME10` — 10% discount
- `SAVE25` — $25 discount

Coupons are stored in `data/coupons.json`.

## Payment Integration

Cash on delivery and direct bank transfer work as offline order methods.

Stripe and PayPal are included as configurable gateway placeholders. Add a hosted Stripe Payment Link or PayPal checkout URL in **Admin → Settings** to enable redirection. A production launch must use each gateway’s official server-side SDK/webhooks to:

- confirm successful payment
- prevent forged payment confirmations
- reduce stock only after confirmed payment
- process refunds
- validate tax and delivery totals
- support Apple Pay or Google Pay through the gateway

The website never stores full card details.

## Email

Every order and contact email is recorded in `data/email-log.json`. The starter also calls PHP `mail()` when the host has outgoing mail configured.

For reliable production delivery, replace `send_transactional_email()` in `lib.php` with SMTP or a transactional provider such as Postmark, Mailgun, Amazon SES or SendGrid.

## Product Images

Sample products use generated SVG files in `public/images/`. In production, upload optimised WebP/JPEG product photos and update the image path in the admin product editor.

## Data and Backups

Store data is saved in JSON files under `data/`. Apache access is blocked by `.htaccess`, but Nginx users must also deny public access to this folder.

Create a manual backup:

```bash
php backup.php
```

For production, schedule encrypted off-server backups and migrate to MySQL/PostgreSQL when order volume or concurrent administration increases.

## Production Checklist

1. Replace all placeholder business details.
2. Change admin credentials and preferably move admin authentication to environment variables or a proper user table.
3. Connect an official payment gateway SDK and verified webhooks.
4. Configure SMTP/transactional email.
5. Install SSL and force HTTPS.
6. Review Australian Consumer Law, privacy, returns, delivery and terms content with a qualified adviser.
7. Add real product photography and exact nursery specifications.
8. Configure delivery zones, taxes, pickup rules and unavailable postcodes.
9. Add Google Analytics, Search Console, Google Ads conversion tracking, Meta Pixel and cookie consent according to applicable privacy requirements.
10. Run security, accessibility, performance and checkout testing before accepting live orders.

## Important Scope Note

This is a functional eCommerce starter, not a fully certified production payment platform. External credentials, tax rules, SMTP details, maps, analytics IDs and legal business content were not supplied, so those integrations remain configurable launch tasks.
