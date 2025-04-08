<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class VolarisController extends BaseController
{
    public function index()
    {
        $datos = $this->mongo_db->get('clientes');
        print_r($datos);
    }


public function _contruct(){
    parent::construct();
    $this->load->library('mongo_db');
}





}
