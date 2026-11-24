<?php

declare(strict_types=1);

const SITE_NAME = 'Evergreen Tree ';
const SITE_TAGLINE = 'Quality Trees for Beautiful Australian Landscapes';
const SITE_PHONE = '+61 400 000 000';
const SITE_EMAIL = 'hello@example.com.au';
const SITE_ADDRESS = 'Melbourne & Surrounding Areas, VIC';
const SITE_HOURS = 'Monday–Friday, 8:00 am–5:00 pm';
const STORE_CURRENCY_SYMBOL = '$';
const DATA_DIR = __DIR__ . '/data';
const ASSET_URL = 'assets';

$adminUsername = getenv('ADMIN_USERNAME');
$adminPassword = getenv('ADMIN_PASSWORD');
define('DEFAULT_ADMIN_USER', $adminUsername === false ? '' : $adminUsername);
define('DEFAULT_ADMIN_PASSWORD', $adminPassword === false ? '' : $adminPassword);

ini_set('session.use_strict_mode', '1');
session_start();

date_default_timezone_set('Australia/Melbourne');