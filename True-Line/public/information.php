<?php
$page_title   = 'Information & FAQ | True-Line Installs';
$page_desc    = 'How True-Line Installs works — quotes, materials, service area, workshop hours and answers to common questions. 6/43 Yazaki Way, Carrum Downs VIC 3201.';
$current_page = 'information';
require_once 'includes/head.php';
require_once 'includes/header.php';

$banner = [
    'title'    => 'Useful<br>Information',
    'tag'      => 'Information',
    'overline' => 'Everything You Need<br>Before You Start',
    'image'    => 13,
];
require 'includes/partials/page-banner.php';

$intro = [
    'label'         => 'How',
    'heading'       => 'We Work',
    'paragraphs'    => [
        'Every job starts with a conversation. Call, email or send a quote request with your drawings, photos or rough measurements, and we\'ll talk through the design, materials and finish that suit the space and the budget.',
        'Once the quote is approved, everything is fabricated in our Carrum Downs workshop — cut, folded, welded and finished in-house — then installed on site by the same team that built it.',
    ],
    'image'         => 6,
    'caption'       => ['Start To Finish', 'Quote, Build &amp; Install'],
    'view_all_link' => 'quote.php',
    'view_all_text' => 'Request a Quote',
];
require 'includes/partials/intro.php';

$faqs = [
    ['How do I get a quote?', 'Fill in our <a href="quote.php">quote form</a>, call <a href="tel:0478314984">0478 314 984</a> or email <a href="mailto:info@trulineinstalls.com.au">info@trulineinstalls.com.au</a>. Drawings, photos and rough measurements all help us price the job accurately.'],
    ['What areas do you service?', 'We\'re based in Carrum Downs and work across Melbourne and surrounding areas. If you\'re unsure whether we cover your suburb, just ask.'],
    ['Do you install as well as fabricate?', 'Yes. We fabricate in our own workshop and install on site, so one team is responsible for the job from the first measurement to the final fixing.'],
    ['What materials do you work with?', 'Mild steel, stainless steel, aluminium, brass, copper and Corten — plus glass for our metal and glass installs such as pool fencing, balustrades and shower screens. See <a href="materials-metal-fabrication.php">Materials &amp; Metal Fabrication</a>.'],
    ['Can you work from my own drawings?', 'Yes. We can cut and fabricate from DXF and CAD files, or work from sketches and measurements and help develop the design with you.'],
    ['Can I visit the workshop?', 'You\'ll find us at 6/43 Yazaki Way, Carrum Downs VIC 3201. Please call ahead so we can make sure someone is available to meet you.'],
    ['What are your business hours?', 'Monday to Friday, 7:00am – 4:30pm.'],
];
?>

<!-- ═══════════════════════════════════════
     FAQ
══════════════════════════════════════ -->
<section class="faq">
    <div class="container">
        <div class="faq__grid">

            <div data-reveal="left">
                <div class="capabilities__heading">
                    <h2 class="capabilities__title">FAQ</h2>
                    <div class="capabilities__heading-label">
                        <span>Questions</span>
                        <span class="capabilities__heading-line"></span>
                    </div>
                </div>
                <p class="capabilities__desc">Answers to the questions we hear most. Can't find what you're looking
                    for? Give us a call and we'll help.</p>
            </div>

            <div class="faq__list" data-reveal="right">
                <?php foreach ($faqs as $i => [$question, $answer]): ?>
                    <div class="faq__item<?= $i === 0 ? ' open' : '' ?>">
                        <button type="button" class="faq__question"><?= $question ?></button>
                        <div class="faq__answer">
                            <p><?= $answer ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>

<?php
$caps = [
    'title'         => 'Contact',
    'label'         => 'Get In Touch',
    'desc'          => 'Call, email or visit us at 6/43 Yazaki Way, Carrum Downs VIC 3201. Open Monday to Friday, 7:00am – 4:30pm.',
    'items'         => [
        ['0478 314 984', 'phone', 'tel:0478314984'],
        ['Email Us', 'mail', 'mailto:info@trulineinstalls.com.au'],
        ['Find Us', 'pin', 'https://www.google.com/maps/search/?api=1&amp;query=6%2F43+Yazaki+Way+Carrum+Downs+VIC+3201'],
    ],
    'view_all_link' => 'contact.php',
    'view_all_text' => 'Contact Page',
];
require 'includes/partials/capabilities.php';

require_once 'includes/footer.php';
require_once 'includes/scripts.php';
