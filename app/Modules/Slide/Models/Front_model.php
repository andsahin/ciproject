<?php

namespace App\Modules\Frontend\Models;

class Front_model {

	function __construct() {
            $this->db =  db_connect();
            // $this->tableName = 'user_registration';
            // $this->primaryKey = 'uid';
         }

}