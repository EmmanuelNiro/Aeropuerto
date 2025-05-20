<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $DBGroup          = 'Aeropuerto';
    protected $table            = 'clientes';
    protected $primaryKey       = 'idObject';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    
    public function _construct()
    {
        parent::__construct();
        $this->load->library('mongo_db');
    }

    public function agregarCliente($datos) {
        $this->mongo_db->insert('clientes', $datos);
    }

    public function obtenerClientes() {
        return $this->mongo_db->get('clientes');
    }

    public function actualizarCliente($id, $datos) {
        $this->mongo_db->where('_id', new MongoDB\BSON\ObjectId($id))->update('clientes', $datos);
    }
    
    public function eliminarCliente($id) {
        $this->mongo_db->where('_id', new MongoDB\BSON\ObjectId($id))->delete('clientes');
    }
}






