<section id="services">
    <div class="container">
        <div class="services-header reveal">
            <div class="section-label">What We Offer</div>
            <h2 class="section-title">Our <span>Services</span></h2>
            <p>AP Heating &amp; Cooling Systems offers six core services across South Australia — Supply &amp;
                Installation, Servicing &amp; Maintenance, Breakdowns &amp; Repairs, and
                Commercial, Residential and Industrial air conditioning, all under one roof.</p>
        </div>
        <div class="services-grid">
            <?php
      $services = [
        ['Air Conditioner Supply & Installation','Split system, ducted and multi-head supply and installation, fitted to a sharp, finished standard every time.','images/service1.jpg','Technician installing an air conditioning system'],
        ['Servicing & Maintenance','Scheduled servicing and filter maintenance that keeps your system running efficiently all year round.','images/hvac-air-handler-ceiling.jpg','Industrial air handling unit serviced and maintained'],
        ['Air Conditioner Breakdowns & Repairs','Fast, reliable breakdown diagnostics and repairs, so you\'re never left without heating or cooling for long.','images/technician-tool-belt-ladder.jpg','Technician with tool belt on a ladder ready for repairs'],
        ['Commercial Air Conditioning','Commercial installs and service contracts completed on schedule, to a standard that holds up to inspection.','images/commercial-ac-units-wall.jpg','Multiple commercial air conditioning units mounted on a building wall'],
        ['Residential Air Conditioning','New installs, upgrades and repairs for homes across South Australia','images/service2.jpg','Flexible ducting installed through a residential wall'],
        ['Industrial Air Conditioning','Large-scale industrial heating and cooling systems, installed and maintained by an experienced crew.','images/industrial-hvac-units-rooftop.jpg','Large-scale industrial air conditioning units on a rooftop'],
      ];
      foreach ($services as $i => [$title, $desc, $img, $imgAlt]):
      ?>
            <div class="service-card reveal" style="transition-delay:<?= ($i * 0.05 + 0.05) ?>s">
                <div class="service-card-img"><img src="<?= $img; ?>" alt="<?= $imgAlt; ?>" /></div>
                <div class="service-card-body">
                    <h3><?= $title; ?></h3>
                    <p><?= $desc; ?></p>
                    <a href="services.php" class="service-arrow">Learn More →</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>