<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsuariosEmpresaModel extends CI_Model {

    public function getDatosUsuariosEmpresa() {
        $this->db->select('ua.id, ua.razon_social, ua.nit, ua.tipo_empresa, ua.telefono, ua.direccion, ua.usuario, ua.estado');
        $this->db->from('usuarios_empresa as ua');
        $this->db->where('ua.estado', 'activo');
        $resultado = $this->db->get()->result();
        return $resultado;
    }
    
}
