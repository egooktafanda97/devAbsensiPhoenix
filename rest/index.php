<?php
date_default_timezone_set("Asia/Jakarta");

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));



if (file_exists(__DIR__ . '/System/storage/framework/maintenance.php')) {
    require __DIR__ . '/System/storage/framework/maintenance.php';
}



require __DIR__ . '/System/vendor/autoload.php';


$app = require_once __DIR__ . '/System/bootstrap/app.php';

$app->bind('path.public', function () {
    return __DIR__;
});

$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

$kernel->terminate($request, $response);
