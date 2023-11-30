<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsuariosEmpresaModel extends CI_Model {

    public function getDatosUsuariosEmpresa() {
        $this->db->select('ua.id, ua.razon_social, ua.nit, ua.tipo_empresa, ua.telefono, ua.direccion, ua.usuario, ua.estado');
        $this->db->from('usuarios_empresa as ua');
        $this->db->where('ua.estado', 'activo');
        $this->db->order_by('ua.id', 'DESC');
        $resultado = $this->db->get()->result();
        return $resultado;
    }

    public function getDatosEmpresaId($id) {
        $this->db->select('uem.*');
        $this->db->from('usuarios_empresa as uem');
        $this->db->where('uem.id', $id);
        $resultado = $this->db->get()->row();
        return $resultado;
    }

    public function registrar_empresa($razon_social, $nit, $tipo_empresa, $telefono, $direccion, $usuario, $contrasena, $estado) {
        // Encriptar la contraseña
        $passEncriptado = password_hash($contrasena, PASSWORD_BCRYPT);
        $data = array(    
            'razon_social' => $razon_social,
            'rol_id' => 3,
            'nit' => $nit,
            'tipo_empresa' => $tipo_empresa,
            'telefono' => $telefono,
            'direccion' => $direccion,
            'usuario' => $usuario,
            'contrasena' => $passEncriptado,
            'estado' => $estado
        );
        $this->db->set('fecha_creacion', 'NOW()', FALSE);
        $this->db->insert('usuarios_empresa', $data);

        // Obtener el ID recién insertado
        $nuevoId = $this->db->insert_id();

        if ($nuevoId > 0) {
            $respuesta = array('estado'=>true, 'tipo'=>'nuevo');
            return $respuesta; // Registro válidas
        } else {
            $respuesta = array('estado'=>false);
            return $respuesta; // Registro inválidas
        }
    }

    public function editar_empresa($id, $razon_social, $nit, $tipo_empresa, $telefono, $direccion, $estado) {
        $data = array(    
            'razon_social' => $razon_social,
            'rol_id' => 3,
            'nit' => $nit,
            'tipo_empresa' => $tipo_empresa,
            'telefono' => $telefono,
            'direccion' => $direccion,
            'estado' => $estado
        );
        $this->db->set('fecha_edicion', 'NOW()', FALSE);
        $this->db->where('id', $id);
        $this->db->update('usuarios_empresa', $data);

        // Verificar si la actualización fue exitosa
        if ($this->db->affected_rows() > 0) {
            $respuesta = array('estado'=>true, 'tipo'=>'edicion');
            return $respuesta; // Registro válidas
        } else {
            $respuesta = array('estado'=>false);
            return $respuesta; // Registro inválidas
        }
    }

    public function verificarUsuario($usuario) {
        $this->db->where('usuario', $usuario);
        $query = $this->db->get('usuarios_empresa');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    
}
