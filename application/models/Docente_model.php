<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Docente_model extends CI_Model {

    private $table = 'docentes';
    private $prefix = 'docente_';    

    public function get($curso){
        return $this->db->where('curso_id', $curso)->order_by('docente_nome')->get($this->table);
    }

    public function store(){

    }

    public function update( $id, $data ){

    }
    
}

/* End of file Docente_model.php */
