<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class VolarisController extends BaseController
{
    public function index()
    {
        $clientes = $this->ClienteModel->obtenerClientes();
        $this->load->view('clientes_view', ['clientes' => $clientes]);    
    }


public function _contruct(){
    parent::construct();
    $this->load->model('CLienteModel');
}


public function agregar() {
    $datos = $this->input->post(); // Obtén los datos del formulario
    $this->Cliente_model->agregarCliente($datos);
    redirect('clientes');
}

public function editar($id) {
    $datos = $this->input->post(); // Obtén datos actualizados
    $this->Cliente_model->actualizarCliente($id, $datos);
    redirect('clientes');
}

public function eliminar($id) {
    $this->Cliente_model->eliminarCliente($id);
    redirect('clientes');
}
}


