<?php require_once 'includes/header.php'; ?>
<?php
// Find this service's data
$service_data = null;
foreach ($services as $s) {
    if ($s['slug'] === 'concrete') { $service_data = $s; break; }
}
?>
<?php require_once 'includes/services/service-detail-template.php'; ?>
<?php require_once 'includes/home/call-us.php'; ?>
<?php require_once 'includes/home/get-free-quote.php'; ?>
<?php require_once 'includes/footer.php'; ?>
