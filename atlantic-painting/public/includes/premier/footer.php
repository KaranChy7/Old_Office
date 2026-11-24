    </main>

    <!-- ═══════════════════════════════════════
         SITE FOOTER
    ══════════════════════════════════════ -->
    <footer class="pp-footer">
        <div class="pp-container pp-footer__inner">

            <a href="<?= $pp_base ?: '#home' ?>" class="pp-footer__logo" aria-label="Atlantic Painting Home">
                <img src="images/atlantic-logo-white.png" alt="Atlantic Painting Service" width="393" height="92" loading="lazy" />
            </a>

            <nav class="pp-footer__nav" aria-label="Footer navigation">
                <?php foreach ($pp_nav as $id => $label): ?>
                    <a href="<?= $pp_base ?>#<?= $id ?>"><?= $label ?></a>
                <?php endforeach; ?>
            </nav>

            <div class="pp-footer__social">
                <a href="tel:<?= $pp_company['phone_tel'] ?>" aria-label="Call <?= $pp_company['name'] ?>"><?= pp_icon('phone') ?></a>
                <a href="mailto:<?= $pp_company['email'] ?>" aria-label="Email <?= $pp_company['name'] ?>"><?= pp_icon('mail') ?></a>
                <a href="<?= $pp_base ?>#contact" aria-label="<?= $pp_company['location'] ?>"><?= pp_icon('pin') ?></a>
            </div>

            <p class="pp-footer__copy">&copy; 2026 <?= $pp_company['name'] ?>. All rights reserved.</p>

        </div>
    </footer>

    <script src="js/premier.js"></script>
</body>

</html>
