<?php // GC-E CAMPERS — FITOUTS TEASER ?>

<section class="fitouts-section section" id="fitouts">
    <div class="container">
        <div class="fitouts-section__layout">

            <!-- Images -->
            <div class="fitouts-section__images" data-animate="fade-left">
                <div class="fitouts-section__img-main">
                    <img src="images/image-7.jpg" alt="Custom camper interior fit-out with timber cabinetry"
                        loading="lazy">
                </div>
                <div class="fitouts-section__img-accent">
                    <img src="images/image-2.jpg" alt="GC-E Campers Arundel workshop" loading="lazy">
                </div>
                <div class="fitouts-section__badge-float">
                    <span>100%</span>
                    <small>Gold Coast<br>Built</small>
                </div>
            </div>

            <!-- Content -->
            <div data-animate="fade-right">
                <div class="section-eyebrow">Custom Campervan Fit-Outs Gold Coast</div>
                <h2 class="section-title">Love the camper?
                    <br><span class="text-gold">We can build yours.</span>
                </h2>
                <div class="gold-divider"></div>
                <p class="body-text fitouts-section__text">
                    Our own vehicles become working showpieces for the same design ideas, cabinetry, electrical systems,
                    sleeping layouts and smart storage we offer customers.
                </p>

                <div class="fitouts-section__services">
                    <?php
          $services = [

            'Custom cabinetry',
            'Rooftop systems',
            'Bed & lounge layouts',
            'Kitchen modules',
            'Solar & battery',
            'Lighting & charging',
            'Fridge integration & Water systems',
             
          ];
          foreach ($services as $s):
            ?>
                    <div class="fitouts-section__service-row ">
                        <?php echo $s; ?></div>
                    <?php endforeach; ?>
                </div>

                <div class="btn-group">
                    <a href="fit_outs.php" class="btn btn--gold">
                        <i class="ri-tools-line"></i> Explore Fit-Outs
                    </a>
                    <!-- <a href="quote.php" class="btn btn--outline">Request a Quote</a> -->
                </div>

                <!-- <div class="fitouts-section__address">
                    <p>
                        <strong>Workshop:</strong> <?php echo $address . ', ' . $address2; ?>
                    </p>
                </div> -->
            </div>

        </div>
    </div>
</section>