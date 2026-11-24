<?php
$page_title   = 'Privacy Policy | True-Line Installs';
$page_desc    = 'How True-Line Installs collects, uses and protects the personal information you share through our website.';
$current_page = 'privacy';
require_once 'includes/head.php';
require_once 'includes/header.php';

$banner = [
    'title'    => 'Privacy<br>Policy',
    'tag'      => 'Privacy',
    'overline' => 'Your Details<br>Handled With Care',
    'image'    => 11,
];
require 'includes/partials/page-banner.php';
?>

<!-- ═══════════════════════════════════════
     POLICY
══════════════════════════════════════ -->
<section class="legal">
    <div class="container">
        <div class="legal__body" data-reveal>
            <p class="legal__updated">Last updated: September 2026</p>

            <h2>Who We Are</h2>
            <p>This website is operated by True-Line Installs, 6/43 Yazaki Way, Carrum Downs VIC 3201. We respect your
                privacy and handle personal information in line with the Australian Privacy Principles.</p>

            <h2>What We Collect</h2>
            <p>When you send an enquiry or request a quote, we collect the details you provide, which may include:</p>
            <ul>
                <li>your name, phone number and email address</li>
                <li>your suburb or project location</li>
                <li>details, timeline and budget for your project</li>
            </ul>

            <h2>How We Use It</h2>
            <p>We use your details only to respond to your enquiry, prepare quotes, and carry out and follow up on work
                you engage us for. We do not sell or rent your personal information.</p>

            <h2>Who We Share It With</h2>
            <p>We only share information where it's needed to deliver your job — for example with a supplier or
                subcontractor working on your project — or where the law requires it.</p>

            <h2>Storage &amp; Security</h2>
            <p>Enquiries are delivered to our business email. We take reasonable steps to protect your information from
                misuse, loss and unauthorised access, and delete it when it's no longer needed.</p>

            <h2>Access &amp; Corrections</h2>
            <p>You can ask to see or correct the personal information we hold about you, or ask us to delete it, at any
                time.</p>

            <h2>Contact Us</h2>
            <p>For any privacy question, email <a href="mailto:info@trulineinstalls.com.au">info@trulineinstalls.com.au</a>
                or call <a href="tel:0478314984">0478 314 984</a>.</p>
        </div>
    </div>
</section>

<?php
require_once 'includes/footer.php';
require_once 'includes/scripts.php';
