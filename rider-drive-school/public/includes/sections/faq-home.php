<section id="faq">
    <div class="container">
        <div class="faq-grid">
            <div class="faq-intro reveal-left">
                <div class="section-label">FAQ</div>
                <h2 class="section-title">Questions We <span>Hear</span> Often</h2>
                <p>Have something specific in mind? Reach out directly — we're happy to talk through your
                    heating or cooling needs any time.</p>
                <div class="faq-cta">
                    <a href="mailto:<?= $email; ?>" class="btn btn-primary"><span>Email Us Directly</span></a>
                </div>
            </div>
            <div class="faq-list reveal-right">
                <?php
                $faqs = [
                  ['What services do you offer?', 'Air conditioner supply &amp; installation, servicing &amp; maintenance, breakdowns &amp; repairs, plus cooling and heating systems for residential, commercial and industrial properties — all handled by the one team.', true],
                  ['Where are you based and who do you service?', 'We\'re based in South Australia and happily service homes and businesses within 100km across greater Adelaide.'],
                  ['What are your operating hours?', 'We\'re open daily, 7:00 AM to 5:00 PM, with phone lines open 24/7. Call us any time to check availability and book.'],
                  ['How experienced is your team?', 'We bring 8+ years of hands-on heating and cooling experience across residential, commercial and industrial projects.'],
                  ['Do you provide free quotes?', 'Yes — every job starts with a free, no-obligation quote so you know exactly what to expect before we start.'],

                ];
                foreach ($faqs as $faq):
                  $q = $faq[0];
                  $a = $faq[1];
                  $open = $faq[2] ?? false;
                  ?>
                <div class="faq-item <?= $open ? 'open' : ''; ?>">
                    <div class="faq-question">
                        <?= $q; ?>
                        <div class="faq-toggle">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <line x1="12" y1="5" x2="12" y2="19" />
                                <line x1="5" y1="12" x2="19" y2="12" />
                            </svg>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <p><?= $a; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>