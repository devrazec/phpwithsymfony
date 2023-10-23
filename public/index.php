<?php

// Errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Autoloader
require __DIR__ . '../../vendor/autoload.php';

use App\Libs\Config;
use App\Libs\Request;
use App\Libs\Response;
use App\Libs\Route;
use App\Controllers\Home;
use App\Models\Setting;

Route::get('/', function () {
    (new Home())->index();
});
