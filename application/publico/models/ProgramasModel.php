<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ProgramasModel extends CI_Model {


    public function getProgramas(){
        $this->db->select('*');
		$this->db->from('charlas');
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get();
		
		// Verificar si hay resultados antes de devolverlos
		if ($query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return array(); // Devolver un array vacío si no hay resultados
		}
    }


    
    
}
