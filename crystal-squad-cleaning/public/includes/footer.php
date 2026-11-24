<?php require __DIR__ . '/call-us.php'; ?>

<footer class="site-footer">
    <div class="site-footer__container">
        <div class="site-footer__grid">

            <!-- Brand -->
            <div class="site-footer__brand">
                <a href="index.php" class="site-footer__logo" aria-label="<?= e($company) ?> home">
                    <img src="images/logo.png" alt="<?= e($company) ?> logo" class="site-footer__logo-img" width="240" height="160" loading="lazy" />
                </a>
                <p class="site-footer__tagline">Residential and commercial cleaning for <?= e($service_area) ?>.
                    <?= e($exp) ?> years experience, fully insured and open <?= e($work_hrs) ?>, <?= e($work_day) ?>.</p>
            </div>

            <!-- Quick links -->
            <div class="site-footer__col">
                <h2 class="site-footer__heading">Quick Links</h2>
                <ul class="site-footer__links">
                    <li><a href="index.php"><?= icon('arrow') ?>Home</a></li>
                    <li><a href="about.php"><?= icon('arrow') ?>About</a></li>
                    <li><a href="services.php"><?= icon('arrow') ?>Services</a></li>
                    <li><a href="service-areas.php"><?= icon('arrow') ?>Service Areas</a></li>
                    <li><a href="gallery.php"><?= icon('arrow') ?>Gallery</a></li>
                    <li><a href="blog.php"><?= icon('arrow') ?>Blog</a></li>
                    <li><a href="contact.php"><?= icon('arrow') ?>Contact</a></li>
                    <li><a href="booking.php"><?= icon('arrow') ?>Book a Clean</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="site-footer__col">
                <h2 class="site-footer__heading">Our Services</h2>
                <ul class="site-footer__links">
                    <?php foreach ($services as $item): ?>
                    <li><a href="<?= $item['slug'] ?>.php"><?= icon('arrow') ?><?= e($item['title']) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact -->
            <div class="site-footer__col">
                <h2 class="site-footer__heading">Get in Touch</h2>
                <ul class="site-footer__contact">
                    <li>
                        <span class="site-footer__contact-icon"><?= icon('phone') ?></span>
                        <a href="tel:<?= str_replace(' ', '', $phone) ?>"><?= e($phone) ?></a>
                    </li>
                    <?php if ($email): ?>
                    <li>
                        <span class="site-footer__contact-icon"><?= icon('mail') ?></span>
                        <a href="mailto:<?= e($email) ?>"><?= e($email) ?></a>
                    </li>
                    <?php endif; ?>
                    <li>
                        <span class="site-footer__contact-icon"><?= icon('pin') ?></span>
                        <span><?= e($address) ?></span>
                    </li>
                    <li>
                        <span class="site-footer__contact-icon"><?= icon('map') ?></span>
                        <span><?= e($service_area) ?></span>
                    </li>
                    <li>
                        <span class="site-footer__contact-icon"><?= icon('clock') ?></span>
                        <span><?= e($work_hrs) ?>, <?= e($work_day) ?></span>
                    </li>
                    <?php if ($abn): ?>
                    <li>
                        <span class="site-footer__contact-icon"><?= icon('id') ?></span>
                        <span>ABN <?= e($abn) ?></span>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="site-footer__bottom">
        <div class="site-footer__container site-footer__bottom-inner">
            <p>&copy; <?= date('Y') ?> <?= e($company) ?>. All rights reserved.</p>
            <p class="site-footer__credit">Designed &amp; Developed by Linear Web Solutions</p>
        </div>
    </div>
</footer>

<!-- Floating tap to call / tap to text buttons -->
<div class="tap-bar" aria-label="Contact us">
    <a href="tel:<?= str_replace(' ', '', $phone) ?>" class="tap-bar__btn tap-bar__btn--call">
        <?= icon('phone') ?><span>Tap to Call</span>
    </a>
    <a href="sms:<?= str_replace(' ', '', $phone) ?>" class="tap-bar__btn tap-bar__btn--text">
        <?= icon('sms') ?><span>Tap to Text</span>
    </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js" crossorigin="anonymous"></script>
<script src="js/scroll-animations.js"></script>
<script src="js/main.js"></script>
</body>

</html>
