<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Check for Maintenance Mode
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register Composer Autoloader
require __DIR__.'/vendor/autoload.php';

// Bootstrap Laravel and Handle Request
$app = require_once __DIR__.'/bootstrap/app.php';
$app->handle(Request::capture())->send();
?>