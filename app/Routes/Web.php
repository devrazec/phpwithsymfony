<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
define('URL_SUBFOLDER', '');

// Routes system
$routes = new RouteCollection();
$routes->add('home', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'HomeController', 'method'=>'index'), array()));