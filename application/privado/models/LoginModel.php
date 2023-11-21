<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function check_login($email, $password) {
        $passCodificado = hash('sha256', $password);
        $query = $this->db->get_where('usuarios_sitio_privado', array('email' => $email, 'contrasena' => $passCodificado));

        if ($query->num_rows() === 1) {
            $respuesta = array('estado'=>true, 'datos'=>$query->result());
            return $respuesta; // Credenciales válidas
        } else {
            $respuesta = array('estado'=>false);
            return $respuesta; // Credenciales inválidas
        }
    }

    public function getDatosUsuario($usuario_id){
        $this->db->select('up.*, rl.rol');
        $this->db->from('usuarios_sitio_privado as up');
        $this->db->join('roles as rl', 'up.rol_id=rl.id');
        $this->db->where('up.id', $usuario_id);
        $resultado = $this->db->get()->row();
        return $resultado;
    }
}
