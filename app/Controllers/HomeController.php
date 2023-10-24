<?php 

namespace App\Controllers;

use App\Models\Setting;
use Symfony\Component\Routing\RouteCollection;

class HomeController
{
    public function index(RouteCollection $routes)
    {
        echo 'Hello World';
    }
}
