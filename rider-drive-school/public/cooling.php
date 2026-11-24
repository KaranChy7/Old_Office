<?php
$page_title = "Cooling Services — AP Heating & Cooling Systems";
$current_page = 'cooling';
$hero_title = 'Cooling <span>Services</span>';
$hero_subtitle = 'Split systems, ducted reverse cycle, multi-head, cassette, evaporative and window air conditioners — supplied, installed and serviced across Salisbury South and greater Adelaide.';
$hero_breadcrumb = 'Cooling';
require_once 'includes/header.php';
require_once 'includes/config.php';
?>

<?php include 'includes/page-hero.php'; ?>

<!-- INTRO -->
<section class="services-intro">
    <div class="container">
        <div class="services-intro-grid">
            <div class="reveal-left">
                <div class="section-label">Cooling Systems</div>
                <h2 class="section-title">Stay Cool, <span>All Summer Long</span></h2>
                <p>When the Adelaide heat sets in, you need a cooling system that actually keeps up. At AP Heating
                    &amp; Cooling Systems, we supply, install and service every type of air conditioning system —
                    matched to your space, your budget and how you actually use the room.</p>
                <p>With 8+ years of experience across Salisbury South and greater Adelaide, our licensed
                    technicians handle everything from a single split system in a bedroom to a fully ducted,
                    zoned solution for the whole home — installed cleanly and backed by manufacturer warranty.</p>
                <a href="get-free-quote.php" class="btn btn-primary" style="margin-top:1rem"><span>Get a Free
                        Quote</span></a>
            </div>
            <div class="services-intro-img reveal-right"><img
                    src="images/industrial-hvac-units-rooftop.jpg"
                    alt="Rooftop air conditioning condenser units" /></div>
        </div>

        <!-- SERVICE CARDS -->
        <div class="all-services">
            <?php
            $cooling_content = [
              'split-systems' => [
                'desc' => "A single indoor and outdoor unit, sized and positioned to suit the room. Our split system installs are quiet, efficient, and finished with a clean cable and pipe run — no shortcuts, no exposed mess.",
                'points' => ['Single & multi-room options', 'Energy-efficient inverter models', 'Quiet indoor operation', 'Clean, tidy pipework', 'Backed by manufacturer warranty'],
                'img' => 'indoor-split-unit-wall-mounted.jpg',
                'alt' => 'Indoor split system air conditioning unit mounted on wall',
                'icon' => '<path d="M12 2v20M12 2l-2.5 2.5M12 2l2.5 2.5M12 22l-2.5-2.5M12 22l2.5-2.5M3 7l18 10M3 7l3.3.9M3 7l.9 3.3M21 17l-3.3-.9M21 17l-.9-3.3M21 7L3 17M21 7l-3.3.9M21 7l-.9 3.3M3 17l3.3.9M3 17l.9-3.3"/>',
              ],
              'ducted-reverse-cycle' => [
                'desc' => "Whole-home comfort delivered through a single, zoned system — heating in winter, cooling in summer, controlled room by room. We design the duct layout around your home, not the other way around.",
                'points' => ['Zoned heating & cooling', 'Concealed ceiling ductwork', 'Central control panel', 'Even temperature throughout', 'Ideal for new builds & renovations'],
                'img' => 'flexible-ducting-ceiling.jpg',
                'alt' => 'Flexible ducting installed in a ceiling cavity',
                'icon' => '<rect x="2" y="7" width="20" height="14" rx="1"/><path d="M8 7V5a2 2 0 012-2h4a2 2 0 012 2v2"/><line x1="2" y1="13" x2="22" y2="13"/>',
              ],
              'multi-head-split-systems' => [
                'desc' => "One outdoor condenser, several indoor heads — cool or heat multiple rooms independently, without the cost or disruption of a full ducted system.",
                'points' => ['One outdoor unit, multiple rooms', 'Independent room control', 'Lower install footprint', 'Cost-effective vs. multiple systems', 'Flexible for home extensions'],
                'img' => 'outdoor-condenser-units-exterior.jpg',
                'alt' => 'Outdoor condenser units installed on an exterior wall',
                'icon' => '<rect x="3" y="4" width="7" height="5" rx="1"/><rect x="14" y="4" width="7" height="5" rx="1"/><rect x="3" y="15" width="7" height="5" rx="1"/><rect x="14" y="15" width="7" height="5" rx="1"/>',
              ],
              'cassette-air-conditioners' => [
                'desc' => "Ceiling-recessed cassette units deliver even airflow in four directions while staying out of sight — a popular choice for offices, shops and open-plan living areas.",
                'points' => ['Discreet ceiling-mounted design', '360° even airflow', 'Suited to commercial fit-outs', 'Slimline, unobtrusive finish', 'Quiet operation'],
                'img' => 'hvac-air-handler-ceiling.jpg',
                'alt' => 'Ceiling-mounted air handler unit',
                'icon' => '<rect x="4" y="4" width="16" height="16" rx="2"/><line x1="4" y1="10" x2="20" y2="10"/><line x1="8" y1="14" x2="8" y2="18"/><line x1="16" y1="14" x2="16" y2="18"/>',
              ],
              'evaporative-air-conditioners' => [
                'desc' => "A cost-effective, energy-efficient way to cool a home through Adelaide's dry summers, using natural evaporation instead of refrigerant gas.",
                'points' => ['Low running costs', 'Continuous fresh air supply', 'Environmentally friendly', 'Well suited to the local climate', 'Simple, low-maintenance system'],
                'img' => 'ventilation-duct-monochrome.jpg',
                'alt' => 'Ventilation ductwork for evaporative cooling system',
                'icon' => '<path d="M12 2s7 8.5 7 13a7 7 0 01-14 0c0-4.5 7-13 7-13z"/>',
              ],
              'window-air-conditioners' => [
                'desc' => "A compact, budget-friendly option for cooling a single room, fitted neatly into an existing window opening with minimal disruption.",
                'points' => ['Budget-friendly cooling', 'Minimal installation disruption', 'Ideal for single rooms', 'Compact footprint', 'Quick turnaround'],
                'img' => 'commercial-ac-units-wall.jpg',
                'alt' => 'Air conditioning units mounted on an exterior wall',
                'icon' => '<rect x="2" y="8" width="20" height="10" rx="1"/><line x1="2" y1="13" x2="22" y2="13"/><line x1="7" y1="8" x2="7" y2="18"/><line x1="17" y1="8" x2="17" y2="18"/>',
              ],
            ];
            $i = 0;
            foreach ($cooling_services as [$label, $slug]):
                $c = $cooling_content[$slug];
                $i++;
            ?>
            <div class="service-detail-card <?= $i % 2 === 0 ? 'reverse' : ''; ?> reveal" id="<?= $slug; ?>">
                <div class="sdc-img"><img src="images/<?= $c['img']; ?>" alt="<?= $c['alt']; ?>" /></div>
                <div class="sdc-content">
                    <div class="sdc-num"><?= str_pad($i, 2, '0', STR_PAD_LEFT); ?></div>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75"
                        stroke-linecap="round" stroke-linejoin="round"><?= $c['icon']; ?></svg>
                    <h2><?= $label; ?></h2>
                    <p><?= $c['desc']; ?></p>
                    <ul class="sdc-list">
                        <?php foreach ($c['points'] as $point): ?>
                        <li><?= $point; ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="get-free-quote.php" class="sdc-link">Request This Service →</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- PROCESS STRIP -->
<div class="process-strip">
    <div class="container">
        <div class="process-strip-header reveal">
            <div class="section-label">How It Works</div>
            <h2 class="section-title">From Call to <span>Cooling</span></h2>
        </div>
        <div class="process-steps">
            <?php
      $steps = [
        ['Free Quote', 'We talk through the space, the goal and your budget before booking your first job.'],
        ['Clear Plan', 'A clear, itemised quote for your cooling job — no guesswork, no wasted time.'],
        ['Install &amp; Repair', 'We work through the job methodically, task after task.'],
        ['Final System Check', 'We check the result with you before we finish, so you\'re fully satisfied.'],
      ];
      foreach ($steps as $i => [$title, $desc]):
        ?>
            <div class="process-step reveal" style="transition-delay:<?= ($i * 0.1) ?>s">
                <div class="ps-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?></div>
                <h4><?= $title; ?></h4>
                <p><?= $desc; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include 'includes/sections/why-us.php'; ?>
<?php include 'includes/callus.php'; ?>
<?php include 'includes/footer.php'; ?>
