<section class="testimonial section">
    <div class="container">
        <div class="testimonial-wrapper">
            <div class="section-title testimonial-title">
                <h5>what our clients <span>says about us?</span></h5>
                <p>Painting and decorating work we're proud to put our name to.</p>
            </div>
            <div class="testimonial-shots">
                <?php
                $shot_alts = [
                    1 => 'Overall 4.9 rating from 18 reviews and client feedback',
                    2 => 'Client reviews for patch and paint, wall painting and ceiling beams',
                    3 => 'Client reviews for ceiling manhole, wall scraping and internal doors',
                    4 => 'Client reviews for concrete patching, room and balustrade painting',
                    5 => 'Client reviews for ceiling beams, hallway and outdoor ceiling paint',
                    6 => 'Client reviews for retaining wall, external cladding and bathroom painting',
                    7 => 'Client reviews for internal ceiling, play room and retaining wall painting',
                    8 => 'Tee N. profile in Hilbert WA with 4.9 rating and portfolio',
                ];
                foreach ($shot_alts as $i => $alt) { ?>
                    <a class="shot" href="images/testi<?php echo $i; ?>.jpeg" target="_blank" rel="noopener">
                        <img src="images/testi<?php echo $i; ?>.jpeg" alt="<?php echo $alt; ?>" loading="lazy">
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>