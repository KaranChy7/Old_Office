<?php
$page_title      = "FAQ — AP Heating & Cooling Systems";
$current_page    = 'faq';
$hero_title      = 'Frequently <span>Asked</span><br />Questions';
$hero_subtitle   = 'We get a lot of the same questions — so we\'ve answered them here. If yours isn\'t listed, just reach out any time.';
$hero_breadcrumb = 'FAQ';
require_once 'includes/header.php';
require_once 'includes/config.php';
?>

<?php include 'includes/page-hero.php'; ?>

<div class="faq-search">
  <div class="container">
    <div class="faq-search-inner">
      <h3>Search Our FAQ</h3>
      <p>Can't find your answer? Try searching or contact us directly.</p>
      <div class="search-box">
        <input type="text" id="faqSearch" placeholder="Search questions..." />
        <button type="button">Search</button>
      </div>
    </div>
  </div>
</div>

<section class="faq-page">
  <div class="container">
    <div class="faq-layout">

      <div class="faq-sidebar">
        <h3>Categories</h3>
        <div class="faq-cat-list">
          <button class="faq-cat-btn active" data-cat="all">All Questions</button>
          <button class="faq-cat-btn" data-cat="general">General</button>
          <button class="faq-cat-btn" data-cat="cooling">Cooling</button>
          <button class="faq-cat-btn" data-cat="heating">Heating</button>
          <button class="faq-cat-btn" data-cat="pricing">Pricing</button>
          <button class="faq-cat-btn" data-cat="booking">Booking</button>
        </div>
        <div class="faq-sidebar-cta">
          <strong><?= $phone; ?></strong>
          <p>Still have questions? Call us any time — we're happy to talk through your heating and cooling needs.</p>
          <a href="get-free-quote.php" class="btn btn-primary"><span>Get a Free Quote</span></a>
        </div>
      </div>

      <div>
        <?php
        $faq_cats = [
          'General' => [
            ['Do you handle small jobs, or just large projects?', 'Both — from a single split system repair to a full industrial installation contract, drawing on 8+ years of hands-on experience meeting trade and industry standards.'],
            ['How experienced is your team?', '8+ years of dedicated, hands-on heating and cooling experience across residential, commercial and industrial properties.'],
            ['Where are you based and where do you service?', 'We\'re based in Salisbury South, SA and service homes and businesses within 100km across greater Adelaide.'],
          ],
          'Cooling' => [
            ['What cooling systems do you install?', 'Split systems, ducted reverse cycle, multi head split systems, cassette air conditioners, evaporative air conditioners and window air conditioners.'],
            ['Which cooling system suits my home?', 'It depends on your space and budget. Get in touch for a free consult and we\'ll recommend the right fit.'],
          ],
          'Heating' => [
            ['What heating systems do you install?', 'Ducted gas heating, gas wall furnaces, decorative gas fires, space heaters and reverse cycle split systems for heating.'],
            ['Can one system handle both heating and cooling?', 'Yes — reverse cycle split systems and ducted reverse cycle systems handle both efficiently.'],
          ],
          'Pricing' => [
            ['How do you price your jobs?', 'Get in touch for a free, no-obligation quote based on the system type and scope you need.'],
            ['Are there any hidden fees?', 'Never. We believe in transparent pricing from day one. If anything changes, we discuss it with you before proceeding.'],
          ],
          'Booking' => [
            ['What are your operating hours?', 'We\'re open daily, 7:00 AM to 5:00 PM, with phone lines open 24/7. Call any time to book.'],
            ['Can I reschedule a job?', 'Yes — just give us a call and we\'ll find a time that works.'],
          ],
        ];
        foreach ($faq_cats as $cat => $items):
        ?>
        <div class="faq-category" data-category="<?= strtolower($cat); ?>">
          <div class="faq-category-title"><?= $cat; ?></div>
          <div class="faq-list">
            <?php foreach ($items as [$q, $a]): ?>
            <div class="faq-item">
              <div class="faq-question">
                <?= $q; ?>
                <div class="faq-toggle"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></div>
              </div>
              <div class="faq-answer"><p><?= $a; ?></p></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/callus.php'; ?>
<?php include 'includes/footer.php'; ?>
