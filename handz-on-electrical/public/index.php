<?php
$page = 'home';
$title = 'Lawn Care & Property Maintenance in Haigslea QLD';
$description = 'Lawn mowing, garden care, landscaping, weed control and acreage maintenance for homes and acreage in Haigslea, Walloon and surrounds. Free quotes.';
include 'includes/header.php';
?>

<!--  Main Body Part Section  -->

<?php include 'includes/banner.php'; ?>
<?php $quote_slot = 'mobile'; include 'includes/quote-short.php'; ?>
<?php include 'includes/about.php'; ?>
<?php include 'includes/registered.php'; ?>
<?php include 'includes/services.php'; ?>
<?php include 'includes/gallery.php'; ?>
<?php include 'includes/roofing.php'; ?>
<?php include 'includes/call-to-action.php'; ?>
<?php include 'includes/about-features.php'; ?>
<?php include 'includes/testimonials.php'; ?>
<?php $quote_slot = 'desktop'; include 'includes/quote-short.php'; ?>
<?php include 'includes/review.php'; ?>
<?php include 'includes/footer.php'; ?>