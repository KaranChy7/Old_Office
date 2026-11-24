<section id="features">
    <div class="container">
        <div class="features-header">
            <div class="reveal">
                <div class="section-label">What Sets Us Apart</div>
                <h2 class="section-title">Built on <span>Principles,</span><br />Proven by Practice</h2>
            </div>
            <p class="features-desc reveal">Every technician says they'll do a good job. We focus on being genuinely
                reliable. Here's what you can count on when you book with AP Heating &amp; Cooling Systems.</p>
        </div>

        <div class="features-grid">
            <?php
      $features = [
        ['01','8+ Years of Trade Experience','Eight-plus years supplying, installing and servicing heating and cooling systems for homes and businesses of every size.','M2 3h20v14H2zm6 18h8M12 17v4'],
        ['02','Heating &amp; Cooling Under One Roof','Split systems, ducted reverse cycle, evaporative cooling, gas heating and more — one team, no subcontractors to chase.','M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5'],
        ['03','Clear Quote Before We Start','We walk you through the scope and cost up front, so nothing gets missed or misunderstood.','M22 11.08V12a10 10 0 11-5.93-9.14M22 4L12 14.01l-3-3'],
        ['04','Flexible Turnaround','One-off repairs, full installations or ongoing commercial contracts — we build a schedule around you.','M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z'],
        ['05','Honest, Upfront Pricing','Clear, itemised quotes with no hidden fees, so you know exactly what you\'re paying for.','M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6'],
        ['06','100km Service Radius','Based in South Australia and happy to travel up to 100km across greater Adelaide to reach you.','M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0zM12 10m-3 0a3 3 0 106 0 3 3 0 00-6 0'],
      ];
      foreach ($features as $i => [$num, $title, $desc, $path]):
      ?>
            <div class="feature-card reveal" style="transition-delay:<?= ($i * 0.05 + 0.05) ?>s">
                <div class="feature-num"><?= $num; ?></div>
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <?php foreach (explode('M', $path) as $j => $seg): if (!$seg) continue; ?>
                        <path d="M<?= $seg ?>" />
                        <?php endforeach; ?>
                    </svg>
                </div>
                <h3><?= $title; ?></h3>
                <p><?= $desc; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>