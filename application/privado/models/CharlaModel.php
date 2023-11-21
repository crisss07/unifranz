<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CharlaModel extends CI_Model {

    public function getDatosCharlas() {
        $this->db->select('cha.*, COUNT(ic.charla_id) as numero_inscritos');
        $this->db->from('charlas as cha');
        $this->db->join('inscritos_charlas as ic', 'cha.id = ic.charla_id', 'left');
        $this->db->where('cha.estado', 'activo');
        $this->db->group_by('cha.id'); // Corregir para agrupar por el ID de charla
        $this->db->order_by('cha.id', 'DESC');
        $resultado = $this->db->get()->result();
        return $resultado;
    }
}
