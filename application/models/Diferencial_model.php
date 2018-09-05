<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Diferencial_model extends CI_Model
{

    private $table = 'cursos_diferencial';
    private $prefix = '';

    public function get($id)
    {
        return $this->db->where('curso', $id)->get($this->table);
    }

}

/* End of file Diferencial_model.php */
