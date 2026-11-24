<!-- ===== GALLERY ===== -->
<section class="home-gallery">
    <div class="container">
        <div class="section-header">
            <div class="section-label">Our Work</div>
            <h2 class="section-title">
                Results You Can <em>See & Feel.</em>
            </h2>
            <p class="section-desc">
                Every project in our gallery represents a real client, a real home or business, and real craftsmanship —
                no stock photography.
            </p>
        </div>

        <div class="gallery-masonry">
            <div class="gallery-item" data-animate>
                <img src="images/concrete/concrete.png" alt="Interior painting project">
                <div class="gallery-overlay">
                    <div class="g-label">Concrete</div>
                    <div class="g-title">Pathway Concreting</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <div class="gallery-item" data-animate>
                <img src="images/concrete/polishing-concrete.jpg" alt="Bathroom tiling project">
                <div class="gallery-overlay">
                    <div class="g-label">Tiling</div>
                    <div class="g-title">Bathroom Renovation</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <div class="gallery-item" data-animate>
                <img src="images/concrete/screeding.jpg" alt="Hardwood flooring installation">
                <div class="gallery-overlay">
                    <div class="g-label">Flooring</div>
                    <div class="g-title">Hardwood Floor Install</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <div class="gallery-item" data-animate>
                <img src="images/painting/floor-tilling.jpg" alt="Concrete driveway project">
                <div class="gallery-overlay">
                    <div class="g-label">Concrete</div>
                    <div class="g-title">Exposed Aggregate Driveway</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <div class="gallery-item" data-animate>
                <img src="images/painting/outdoor-tiling.jpg" alt="Exterior painting project">
                <div class="gallery-overlay">
                    <div class="g-label">Painting</div>
                    <div class="g-title">Full Exterior Repaint</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <div class="gallery-item" data-animate>
                <img src="images/painting/silicone.jpg" alt="Kitchen tiling project">
                <div class="gallery-overlay">
                    <div class="g-label">Tiling</div>
                    <div class="g-title">Kitchen Splashback</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <?php if ($current_page === 'gallery.php'): ?>
            <!-- remaining gallery inside it and it will be shown only in gallery page -->
            <div class="gallery-item" data-animate>
                <img src="images/concrete/laminate-flooring.jpg" alt="Project">
                <div class="gallery-overlay">
                    <div class="g-label">flooring</div>
                    <div class="g-title">laminate flooring</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <div class="gallery-item" data-animate>
                <img src="images/painting/silicone.jpg" alt="silicone">
                <div class="gallery-overlay">
                    <div class="g-label">Silicone</div>
                    <div class="g-title">Bathroom Renovation</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <div class="gallery-item" data-animate>
                <img src="images/concrete/polishing-concrete.jpg" alt="Polish Concrete">
                <div class="gallery-overlay">
                    <div class="g-label">Concrete</div>
                    <div class="g-title">Polish Concrete</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <div class="gallery-item" data-animate>
                <img src="images/painting/residential-painting.jpg" alt="Residential Painting">
                <div class="gallery-overlay">
                    <div class="g-label">Concrete</div>
                    <div class="g-title">Residential Painting</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <div class="gallery-item" data-animate>
                <img src="images/concrete/slab-concrete.jpg" alt="Slab Concrete">
                <div class="gallery-overlay">
                    <div class="g-label">Concrete</div>
                    <div class="g-title">Slab Concrete</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <div class="gallery-item" data-animate>
                <img src="images/painting/waterproofing.jpg" alt="waterproofing">
                <div class="gallery-overlay">
                    <div class="g-label">painting</div>
                    <div class="g-title">waterproofing</div>
                    <div class="g-zoom"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php if ($current_page !== 'gallery.php'): ?>
        <div class="gallery-cta" data-animate>
            <a href="contact_us" class="btn-primary">
                <i class="fa-solid fa-images"></i> See More Work
            </a>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Lightbox -->
<div class="lightbox-overlay" id="lightbox">
    <span class="lb-close" id="lb-close"><i class="fa-solid fa-xmark"></i></span>
    <img src="" alt="Gallery image" id="lb-img">
</div>