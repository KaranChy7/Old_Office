<?php
$page_title = "Heating Services — AP Heating & Cooling Systems";
$current_page = 'heating';
$hero_title = 'Heating <span>Services</span>';
$hero_subtitle = 'Ducted gas heating, gas wall furnaces, decorative gas fires, space heaters and reverse-cycle split systems — supplied, installed and serviced across Salisbury South and greater Adelaide.';
$hero_breadcrumb = 'Heating';
require_once 'includes/header.php';
require_once 'includes/config.php';
?>

<?php include 'includes/page-hero.php'; ?>

<!-- INTRO -->
<section class="services-intro">
    <div class="container">
        <div class="services-intro-grid">
            <div class="reveal-left">
                <div class="section-label">Heating Systems</div>
                <h2 class="section-title">Warm Through <span>Every Winter</span></h2>
                <p>Adelaide winters bite, and a heating system that can't keep up isn't worth having. At AP
                    Heating &amp; Cooling Systems, we supply, install and service every type of heating system —
                    matched to your home, your household and how you actually use the space.</p>
                <p>With 8+ years of experience across Salisbury South and greater Adelaide, our licensed
                    technicians handle everything from a single wall furnace in a unit to a fully ducted, zoned
                    gas heating system for the whole home — installed safely and finished to a standard you can
                    rely on.</p>
                <a href="get-free-quote.php" class="btn btn-primary" style="margin-top:1rem"><span>Get a Free
                        Quote</span></a>
            </div>
            <div class="services-intro-img reveal-right"><img
                    src="images/gauge-closeup-diagnostic.jpg"
                    alt="Close-up of a gas heating system diagnostic gauge" /></div>
        </div>

        <!-- SERVICE CARDS -->
        <div class="all-services">
            <?php
            $heating_content = [
              'ducted-gas-heating' => [
                'desc' => "Whole-home warmth through winter, delivered evenly through a zoned duct system and controlled from a single thermostat.",
                'points' => ['Whole-home, zoned heating', 'Fast, even warm-up', 'Central thermostat control', 'Energy-efficient gas systems', 'Concealed ceiling ductwork'],
                'img' => 'hvac-crew-rooftop-ductwork.jpg',
                'alt' => 'Technicians installing rooftop ductwork for a gas heating system',
                'icon' => '<path d="M12 22c-4.5-1.5-7-5-7-9.5C5 8 8 4.5 8 4.5c0 2 1 3 2 3.5C9.5 6 11 4 12 2c0 3 2 4.5 3.5 6.5C17 10.5 19 12 19 15c0 4-3 6-7 7z"/>',
              ],
              'gas-wall-furnaces' => [
                'desc' => "A compact, direct-vent heating solution that mounts flush to an internal wall — ideal for smaller homes, units and individual living spaces.",
                'points' => ['Compact wall-mounted design', 'No ductwork required', 'Fast room heat-up', 'Suited to units & smaller homes', 'Safe, direct-vent operation'],
                'img' => 'renovation-modern-bathroom.jpg',
                'alt' => 'Interior wall in a renovated living space suited to a wall furnace',
                'icon' => '<rect x="5" y="3" width="14" height="18" rx="2"/><line x1="9" y1="8" x2="15" y2="8"/><line x1="9" y1="12" x2="15" y2="12"/><circle cx="12" cy="17" r="1.5"/>',
              ],
              'decorative-gas-fire' => [
                'desc' => "A feature fireplace that heats the room as well as it looks — installed safely and finished to complement the space around it.",
                'points' => ['Combines heating & feature design', 'Safe, compliant installation', 'Realistic flame effect', 'Freestanding & built-in options', 'Low-maintenance operation'],
                'img' => 'renovated-house-exterior.jpg',
                'alt' => 'Renovated home living space suited to a feature gas fireplace',
                'icon' => '<rect x="3" y="10" width="18" height="11" rx="1"/><path d="M12 4c1.5 2-.5 3-.5 5a2.5 2.5 0 005 0c0-1.5-.8-2.3-.8-2.3"/>',
              ],
              'space-heaters' => [
                'desc' => "Portable and fixed space heaters for fast, targeted warmth in a single room — a practical option alongside a whole-home system or on its own.",
                'points' => ['Fast, targeted warmth', 'Portable & fixed options', 'Ideal for smaller spaces', 'Cost-effective top-up heating', 'Easy to install & use'],
                'img' => 'technician-tool-belt-ladder.jpg',
                'alt' => 'Technician with tool belt on a ladder during a heating install',
                'icon' => '<rect x="4" y="9" width="16" height="10" rx="2"/><line x1="8" y1="13" x2="8" y2="15"/><line x1="12" y1="13" x2="12" y2="15"/><line x1="16" y1="13" x2="16" y2="15"/><line x1="12" y1="9" x2="12" y2="5"/>',
              ],
              'heating-split-systems' => [
                'desc' => "The same split system that cools your home in summer also delivers efficient reverse-cycle heating in winter — one system, year-round comfort.",
                'points' => ['Heating & cooling in one unit', 'Energy-efficient inverter technology', 'Room-by-room control', 'Quiet indoor operation', 'Backed by manufacturer warranty'],
                'img' => 'indoor-split-unit-wall-mounted.jpg',
                'alt' => 'Indoor reverse-cycle split system unit mounted on wall',
                'icon' => '<rect x="2" y="6" width="20" height="7" rx="1.5"/><path d="M12 13v4M9 21h6"/>',
              ],
            ];
            $i = 0;
            foreach ($heating_services as [$label, $slug]):
                $c = $heating_content[$slug];
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
            <h2 class="section-title">From Call to <span>Warmed Up</span></h2>
        </div>
        <div class="process-steps">
            <?php
      $steps = [
        ['Free Quote', 'We talk through the space, the goal and your budget before booking your first job.'],
        ['Clear Plan', 'A clear, itemised quote for your heating job — no guesswork, no wasted time.'],
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
