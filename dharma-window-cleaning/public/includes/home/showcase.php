 <section class="showcase" id="why-choose-us">
     <div class="showcase__container">

         <div class="showcase__media" data-reveal="left">
             <div class="showcase__media-item showcase__media-item--main">
                 <video class="showcase__image" data-inview-play muted loop playsinline preload="none"
                     poster="images/roof-pressure-wash.jpg" aria-label="Our team pressure washing a terracotta tiled roof">
                     <source src="images/roof-pressure-wash.mp4" type="video/mp4">
                 </video>
             </div>
             <div class="showcase__media-item showcase__media-item--top">
                 <img src="images/solar-panel-cleaning.jpg" alt="Our team cleaning solar panels on a tiled roof" class="showcase__image">
             </div>
             <div class="showcase__media-item showcase__media-item--bottom">
                 <img src="images/gutter-cleaning-video.jpg" alt="Gutter packed with leaves before cleaning" class="showcase__image">
             </div>

             <div class="showcase__tag">
                 <span class="showcase__tag-title">Eco-Friendly</span>
                 <span class="showcase__tag-sub">Products</span>
             </div>
         </div>

         <div class="showcase__content" data-reveal="right" data-delay="150">
             <div class="showcase__badge">Why choose us</div>
             <h2>Why choose <?= $business_name ?>.</h2>
             <p>There are many reasons to trust us with your cleaning needs. Our cleaning services comply with
                 all relevant industry standards and regulations, ensuring top-tier quality and adherence to best practices.</p>

             <ul class="showcase__points">
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                         <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                     </svg>
                     <?= $experience ?> of expertise and experience
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                         <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                     </svg>
                     Modern, eco-friendly cleaning techniques
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                         <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                     </svg>
                     Flexible, tailored cleaning packages
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                         <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                     </svg>
                     Advanced cleaning equipment and methods
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                         <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                     </svg>
                     Fast and efficient service for all jobs
                 </li>
                 <li>
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                         <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                     </svg>
                     Transparency, honesty and fairness in all dealings
                 </li>
             </ul>

             <div class="showcase__actions">
                 <a href="quote.php" class="showcase__btn-primary">
                     Get a quote
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icon-sm">
                         <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z" />
                     </svg>
                 </a>
                 <a href="tel:<?= $phone_link ?>" class="showcase__btn-secondary">
                     Call <?= $phone ?>
                 </a>
             </div>
         </div>

     </div>
 </section>
