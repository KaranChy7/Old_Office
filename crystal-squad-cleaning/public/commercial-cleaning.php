<?php
$current_page = 'commercial-cleaning';
require_once 'includes/icons.php';
$service      = find_service($services, $current_page);
$page_title   = $service['title'] . ' Sydney & Bankstown';
$page_desc    = $service['meta'];
$hero_title   = $service['title'];
$hero_icon    = $service['icon'];
$hero_image   = 'services/' . $service['slug'] . '.jpg';
require_once 'includes/header.php';
require_once 'includes/page-hero.php';
require_once 'includes/service-detail.php';
require_once 'includes/footer.php';
