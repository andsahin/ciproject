<?php

if (!isset($routes)) {
    $routes = \Config\Services::routes(true);
}

$routes->group('slide', ['filter' => 'home_filter', 'namespace' => 'App\Modules\Slide\Controllers\Home'], function ($subroutes) {
    /*** Route for customer setting***/
    $subroutes->add('home/test', 'Home::test');  
    $subroutes->add('home/hello', 'Home::hello');  

});



