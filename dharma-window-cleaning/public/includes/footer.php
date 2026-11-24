 <footer class="site-footer">
     <div class="site-footer__container">

         <div class="site-footer__grid">

             <!-- Brand -->
             <div class="site-footer__brand">
                 <a href="index.php" class="site-footer__logo" aria-label="<?= $business_name ?> Home">
                     <img src="images/logo.png" alt="<?= $business_name ?>" class="site-footer__logo-image">
                 </a>
                 <p>Window, gutter, roof, solar panel and pressure cleaning, plus roof and property maintenance,
                     within <?= $radius ?> of <?= $suburb ?>, <?= $state ?>. A 100% insured company &mdash; <?= $slogan ?>.</p>
             </div>

             <!-- Company -->
             <div class="site-footer__col">
                 <h4>Company</h4>
                 <ul class="site-footer__links">
                     <li><a href="about.php">About</a></li>
                     <li><a href="services.php">Services</a></li>
                     <li><a href="gallery.php">Gallery</a></li>
                     <li><a href="reviews.php">Reviews</a></li>
                     <li><a href="contact.php">Contact</a></li>
                     <li><a href="quote.php">Get a Quote</a></li>
                 </ul>
             </div>

             <!-- Services -->
             <div class="site-footer__col">
                 <h4>Services</h4>
                 <ul class="site-footer__links">
                     <?php foreach ($services as $slug => $svc): ?>
                     <li><a href="<?= $slug ?>.php"><?= htmlspecialchars($svc['title']) ?></a></li>
                     <?php endforeach; ?>
                 </ul>
             </div>

             <!-- Contact -->
             <div class="site-footer__col">
                 <h4>Contact</h4>
                 <ul class="site-footer__links">
                     <li><a href="tel:<?= $phone_link ?>"><?= $phone ?></a></li>
                     <li><a href="mailto:<?= $email ?>"><?= $email ?></a></li>
                     <li><span><?= $address ?></span></li>
                     <?php if ($abn): ?><li><span>ABN <?= $abn ?></span></li><?php endif; ?>
                     <?php if ($hours): ?><li><span><?= $hours ?></span></li><?php endif; ?>
                 </ul>
             </div>

         </div>

     </div>

     <div class="site-footer__bottom">
         <div class="site-footer__container site-footer__bottom-inner">
             <p>&copy; <?= date('Y') ?> <?= $business_name ?>. All rights reserved. Designed &amp;
                 Developed by <a href="https://linearwebsolutions.com.au/">Linear Web Solutions</a></p>

         </div>
     </div>
 </footer>

 <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>
 <script src="js/scroll-animations.js"></script>
 <script src="js/main.js"></script>
 </body>

 </html>
