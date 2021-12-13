<?php

//namespace App\Controllers;
namespace App\Modules\Admin\Controllers;    

class Dashboard extends BaseController
{
    public function index()
    {
       
        $data['content'] = $this->BASE_VIEW . '\dashboard';
        return $this->template->admin_layout($data); 
    }
    
    public function test(){
        return view('welcome_message');
    }

    public function hello(){
        echo('saaaaaaaaa');
    }
}
