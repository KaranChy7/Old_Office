<?php
 
$breadcrumbs = $breadcrumbs ?? [];
if (!empty($breadcrumbs)):
    $crumb_count = count($breadcrumbs);
    $schema_items = [];
    foreach ($breadcrumbs as $i => $crumb) {
        $item = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $crumb['label'],
        ];
        if (!empty($crumb['url'])) {
            $item['item'] = SITE_URL . '/' . ltrim($crumb['url'], '/');
        }
        $schema_items[] = $item;
    }
?>
<nav class="breadcrumbs" aria-label="Breadcrumb">
    <div class="container breadcrumbs__inner">
        <ol>
            <?php foreach ($breadcrumbs as $i => $crumb): $is_last = $i === $crumb_count - 1; ?>
            <li<?= $is_last ? ' aria-current="page"' : '' ?>>
                <?php if (!$is_last && !empty($crumb['url'])): ?>
                <a href="<?= htmlspecialchars($crumb['url']) ?>"><?= htmlspecialchars($crumb['label']) ?></a>
                <?php else: ?>
                <?= htmlspecialchars($crumb['label']) ?>
                <?php endif; ?>
                </li>
                <?php endforeach; ?>
        </ol>
    </div>
</nav>
<script type="application/ld+json">
<?= json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => $schema_items,
], JSON_UNESCAPED_SLASHES) ?>
</script>
<?php endif; ?>