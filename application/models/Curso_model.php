<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso_model extends CI_Model {

    private $table = 'cursos';
    private $prefix = 'curso_';    

    public function get( $id = null ){
        if($id === null)
            return $this->db->order_by('curso_nome')->get($this->table);
        return $this->db->where('curso_id', $id)->get($this->table);
    }
    
    public function getBySlug($slug){
        return $this->db->where('curso_slug', $slug)->get($this->table);
    }

    public function store(){

    }

    public function update( $id, $data ){

    }

}

/* End of file Curso_model.php */
