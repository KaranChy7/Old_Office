<?php
$service_slug = 'window-cleaning';
require_once 'includes/services-contain.php';
$page_title   = $services[$service_slug]['page_title'];
$current_page = 'services';
require_once 'includes/header.php';
require_once 'includes/page-service-detail.php';
require_once 'includes/footer.php';