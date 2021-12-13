<?php

//namespace App\Controllers;
namespace App\Modules\Frontend\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    
    public function test(){
        return view('welcome_message');
    }

    public function hello(){
        echo('saaaaaaaaa');
    }
}
