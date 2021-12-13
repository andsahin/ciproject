<?php   

namespace App\Libraries;
use App\Modules\Frontend\Models\Front_model;

class Template
{
    public function __construct()
    {
        $this->db         = db_connect();
        $this->front_model  = new Front_model();
        $session    = \Config\Services::session();
    }

    public function admin_layout($data)
    { 
        $admin_view         = "App\Modules\Admin\Views";
        $uri                = service('uri','<?php echo base_url(); ?>');
        $data['uri']        = $uri;
        $session            = \Config\Services::session();
        $data['session']    = $session;
        $data['request']      = \Config\Services::request();
        
        $validation         =  \Config\Services::validation();
        $data['validation'] = $validation;
        

        //$data['settings'] = $this->setting_data();
       
        echo view($admin_view.'\header', $data); 
        echo view($data['content'], $data);

        return view($admin_view.'\footer', $data);
    }

}