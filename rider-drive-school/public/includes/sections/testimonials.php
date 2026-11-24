<section id="testimonials">
    <div class="container">
        <div class="testimonials-header reveal">
            <div class="section-label">Client Stories</div>
            <h2 class="section-title">Straight from <span>Our Clients</span></h2>
            <p>Sample reviews shown for layout purposes — swap in your own client reviews before this site goes live.
            </p>
        </div>
        <div class="testi-slider">
            <button class="testi-nav testi-prev" id="testiPrev" aria-label="Previous testimonial">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
            </button>

            <div class="testi-viewport" id="testiViewport">
                <div class="testimonials-grid">
                    <?php
          $stars = '<div class="stars">' . str_repeat('<svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>', 5) . '</div>';
          $testimonials = [
            ['DP','David P.','Homeowner, South Australia','Replace this with a real review. Describe how the team communicated clearly, turned up on time, and how the finished heating or cooling installation performed.'],
            ['SL','Sarah L.','Homeowner, South Australia','Replace this with a real review. Mention specifics — turnaround time, quality of the split system or ducted install, or a particular job that made a difference.'],
            ['TM','Tracey M.','Property Manager, Elizabeth, SA','Replace this with a real review. Clients booking commercial servicing or repairs often mention reliability and communication.'],
            ['JK','James K.','Homeowner, South Australia','Replace this with a real review. Great for clients who mention repeat jobs or ongoing maintenance contracts.'],
            ['EH','Emma H.','Business Owner, Elizabeth South, SA','Replace this with a real review. Useful for commercial clients praising consistency across several jobs.'],
          ];
          foreach ($testimonials as $i => [$init, $name, $location, $text]):
          ?>
                    <div class="testi-card reveal" style="transition-delay:<?= ($i * 0.05 + 0.05) ?>s">
                        <?= $stars; ?>
                        <p class="testi-text"><?= $text; ?></p>
                        <div class="testi-author">
                            <div class="author-avatar"><?= $init; ?></div>
                            <div class="author-info">
                                <strong><?= $name; ?></strong>
                                <span><?= $location; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button class="testi-nav testi-next" id="testiNext" aria-label="Next testimonial">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
            </button>
        </div>
    </div>
</section>