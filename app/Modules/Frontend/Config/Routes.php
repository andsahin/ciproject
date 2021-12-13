<?php

if (!isset($routes)) {
    $routes = \Config\Services::routes(true);
}

$routes->group('homes', ['filter' => 'home_filter', 'namespace' => 'App\Modules\Frontend\Controllers\Home'], function ($subroutes) {
    /*** Route for customer setting***/
    $subroutes->add('home/test', 'Home::index');  
    $subroutes->add('home/hello', 'Home::hello');  

});



