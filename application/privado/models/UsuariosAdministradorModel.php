<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsuariosAdministradorModel extends CI_Model {

    public function getDatosUsuariosAdministradores() {
        $this->db->select('ua.id, ua.nombres, ua.apellidos, ua.email, ua.estado');
        $this->db->from('usuarios_sitio_privado as ua');
        $this->db->where('ua.estado', 'activo');
        $resultado = $this->db->get()->result();
        return $resultado;
    }
    
}
