<section class="call-us">
    <div class="call-us__container">
        <div class="call-us__card" data-reveal>

            <div class="call-us__content">
                <span class="call-us__icon"><?= icon('phone') ?></span>
                <div>
                    <h2 class="call-us__title">Need a cleaner in Sydney or Bankstown?</h2>
                    <p class="call-us__subtitle">We are available <?= e($work_hrs) ?>, <?= e($work_day) ?>. Call us or
                        send a quick request for a free quote.</p>
                </div>
            </div>

            <div class="call-us__actions">
                <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="call-us__btn-primary">
                    <?= icon('phone') ?>
                    <?= e($phone) ?>
                </a>
                <a href="quote.php" class="call-us__btn-secondary">
                    <?= icon('send') ?>
                    Get a free quote
                </a>
            </div>
        </div>
    </div>
</section>
