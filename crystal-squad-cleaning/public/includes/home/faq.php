<?php
// Answers use only the business details from header.php
$faqs = [
    [
        'q' => 'What areas do you service?',
        'a' => 'We clean homes and businesses in ' . $service_area . '. Call us if you are not sure we cover your area.',
    ],
    [
        'q' => 'When are you available?',
        'a' => 'We are available ' . $work_hrs . ', ' . $work_day . ', so we can clean at a time that suits you.',
    ],
    [
        'q' => 'What cleaning services do you offer?',
        'a' => 'We offer ' . count($services) . ' services for homes and businesses, including ' . implode(', ', array_map(function ($item) {
            return html_entity_decode($item['title']);
        }, array_slice($services, 0, 4))) . ' and more. See the full list on our services page.',
    ],
    [
        'q' => 'Are you insured?',
        'a' => 'Yes. ' . $company . ' is fully insured.',
    ],
    [
        'q' => 'How much experience do you have?',
        'a' => 'Our team has ' . $exp . ' years of cleaning experience.',
    ],
    [
        'q' => 'How do I get a quote?',
        'a' => 'Call us on ' . $phone . ', send us a text, or fill in our free quote form and we will get back to you.',
    ],
];
?>
<section class="faq" id="faq">
    <div class="faq__container">

        <div class="faq__head">
            <div class="section-badge" data-reveal><?= icon('list') ?>FAQ</div>
            <h2 class="faq__title" data-reveal data-delay="100">Frequently asked questions</h2>
            <p class="faq__text" data-reveal data-delay="200">Quick answers about our cleaning services. Can't find
                what you need? Call us any time.</p>
        </div>

        <div class="faq__list" data-reveal data-delay="300">
            <?php foreach ($faqs as $i => $faq): ?>
            <details class="faq__item" <?= $i === 0 ? 'open' : '' ?>>
                <summary class="faq__question"><?= e($faq['q']) ?><?= icon('chevron') ?></summary>
                <p class="faq__answer"><?= e($faq['a']) ?></p>
            </details>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php
// FAQ structured data for search engines
$faq_schema = [
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(function ($faq) {
        return ['@type' => 'Question', 'name' => $faq['q'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']]];
    }, $faqs),
];
?>
<script type="application/ld+json"><?= json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
