<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsuariosAlumniModel extends CI_Model {

    public function getDatosUsuariosAlumni() {
        $this->db->select('ua.id, ua.nombres, ua.apellidos, ua.ci, ua.celular, ua.email, ua.semestre, se.sede, ca.carrera, ro.rol, ua.estado');
        $this->db->from('usuarios_alumni as ua');
        $this->db->join('sede as se', 'ua.sede_id = se.id');
        $this->db->join('carrera as ca', 'ua.carrera_id = ca.id');
        $this->db->join('roles as ro', 'ua.rol_id = ro.id');
        $this->db->where('ua.estado', 'activo');
        $resultado = $this->db->get()->result();
        return $resultado;
    }
    
    public function getDatosTitulo($id) {
        $this->db->select('empresa, tema');
        $this->db->from('charlas');
        $this->db->where('id', $id);
        $this->db->where('estado', 'activo');
        $resultado = $this->db->get()->row();
        return $resultado;
    }

    public function getDatosInscritos($id) {
        $this->db->select('ic.id, ua.nombres, ua.apellidos, ua.ci, ua.celular, ua.email, ca.carrera');
        $this->db->from('inscritos_charlas as ic');
        $this->db->join('usuarios_alumni as ua', 'ic.usuario_alumni_id = ua.id');
        $this->db->join('carrera as ca', 'ua.carrera_id = ca.id');
        $this->db->where('ic.charla_id', $id);
        $this->db->where('ic.estado', 'activo');
        $this->db->where('ua.estado', 'activo');
        $resultado = $this->db->get()->result();
        return $resultado;
    }
}
