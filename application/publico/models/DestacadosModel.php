<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DestacadosModel extends CI_Model {


		public function getDestacados($sede){
			$this->db->select('des.*, se.sede as sede_u, ca.carrera as carrera_u');
			$this->db->from('alumnos_destacados as des');
			$this->db->join('sede as se', 'se.id=des.sede_id');
			$this->db->join('carrera as ca', 'ca.id=des.carrera_id');
			$this->db->where('des.sede_id', $sede);
			$this->db->order_by('RAND()'); // Ordenar aleatoriamente
			$this->db->limit(3); // Limitar a 6 registros
			$query = $this->db->get();
			
			// Verificar si hay resultados antes de devolverlos
			if ($query->num_rows() > 0) {
				return $query->result_array();
			} else {
				return array(); // Devolver un array vacío si no hay resultados
			}
		}
		public function getCarreras(){
			$this->db->select('*');
			$this->db->from('carrera');
			$this->db->order_by('carrera', 'ASC');
			$query = $this->db->get();
			
			// Verificar si hay resultados antes de devolverlos
			if ($query->num_rows() > 0) {
				return $query->result_array();
			} else {
				return array(); // Devolver un array vacío si no hay resultados
			}
		}
}
