<?php

declare(strict_types=1);
require_once __DIR__ . '/lib.php';
if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    exit('Run this backup script from the command line.');
}
$backupDir = __DIR__ . '/backups';
if (!is_dir($backupDir)) mkdir($backupDir, 0775, true);
$target = $backupDir . '/data-' . date('Ymd-His');
mkdir($target, 0775, true);
foreach (glob(DATA_DIR . '/*.json') as $file) {
    copy($file, $target . '/' . basename($file));
}
echo "Backup created: {$target}\n";
