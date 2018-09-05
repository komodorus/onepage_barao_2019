<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Matriz_model extends CI_Model {

    private $table = 'curso_matriz_curricular';
    private $prefix = 'matriz_';    

    public function get($curso)
    {
        return $this->db->where('curso_id', $curso)->order_by('matriz_periodo')->get($this->table);
    }

    public function store()
    {

    }

    public function update( $id, $data )
    {

    }
    
}

/* End of file Matriz_model.php */
