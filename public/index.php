<?php

// Errors
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Autoloader
require_once __DIR__ . '../../vendor/autoload.php';

//use App\Libs\Router;
//use App\Routes\Web;
//use App\Controllers\HomeController;
//use App\Models\Setting;


// Routes
require_once '../App/Routes/Web.php';
require_once '../App/Libs/Router.php';

use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\ErrorHandler\ErrorHandler;
use Symfony\Component\ErrorHandler\DebugClassLoader;

Debug::enable();
