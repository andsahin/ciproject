<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
//use CodeIgniter\Filters\CSRF;
// use CodeIgniter\Filters\DebugToolbar;
// use CodeIgniter\Filters\Honeypot;
helper('filesystem');

$path = 'app/Modules/';
$map  = directory_map($path);
$csrf   = array();


if (is_array($map) && sizeof($map) > 0) {

	$test = '';
    foreach ($map as $key => $value) {
        $csrf_array = str_replace("\\", '/', $path . $key . 'Filter/CSRF_Filter.php');
        if (file_exists($csrf_array)) {
            @include($csrf_array);
        }
    }


    $newArr = array();
    foreach ($csrf as $key => $singleArr) {
    	
    	foreach ($singleArr as $index => $element) {

    		$newArr[] = $element;
    		
    	}
    }
  
}

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     * 
     *   'csrf'     => CSRF::class,
     *   'toolbar'  => DebugToolbar::class,
      *  'honeypot' => Honeypot::class,
     *
     * @var array
     */
    public $aliases = [
        'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
        'admin_filter' 		=> \App\Filters\Admin_filter::class,
		'home_filter' 	=> \App\Filters\Home_filter::class
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            // 'csrf',
        ],
        'after' => [
            'toolbar',
            // 'honeypot',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
