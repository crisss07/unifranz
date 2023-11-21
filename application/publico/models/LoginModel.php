<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function check_login($ci, $contrasena) {
        $this->db->select('id, contrasena');
        $this->db->from('usuarios_alumni');
        $this->db->where('ci', $ci);
        $this->db->where('estado', 'activo');
        $resultado = $this->db->get()->row();

        if ($resultado) {
            if (password_verify($contrasena, $resultado->contrasena)) {
               $respuesta = array('estado'=>true, 'id'=>$resultado->id);
                return $respuesta; // Credenciales válidas
            } else {
                $respuesta = array('estado'=>false);
                return $respuesta; // Credenciales inválidas
            }
        } else {
            $respuesta = array('estado'=>false);
            return $respuesta; // Credenciales inválidas
        }

        
    }

    public function getDatosUsuario($usuario_id){
        $this->db->select('ua.*, rl.rol');
        $this->db->from('usuarios_alumni as ua');
        $this->db->join('roles as rl', 'ua.rol_id=rl.id');
        $this->db->where('ua.id', $usuario_id);
        $resultado = $this->db->get()->row();
        return $resultado;
    }

    public function getVerificaCi($ci){
        $this->db->select('*');
        $this->db->from('usuarios_alumni');
        $this->db->where('ci', $ci);
        $this->db->where('estado', 'activo');
        $resultado = $this->db->get()->row();
        if ($resultado) {
            $respuesta = array('estado'=>true, 'id'=>$resultado->id, 'nombres'=>$resultado->nombres, 'apellidos'=>$resultado->apellidos, 'email'=>$resultado->email);
            return $respuesta; 
        } else {
            $respuesta = array('estado'=>false);
            return $respuesta;
        }
    }

    public function getNuevaContrasena() {
        $longitud = 12;
        // Caracteres permitidos en la contraseña
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';

        // Obtener la longitud del conjunto de caracteres
        $longitudCaracteres = strlen($caracteres);

        // Inicializar la contraseña
        $contrasena = '';

        // Generar la contraseña aleatoriamente
        for ($i = 0; $i < $longitud; $i++) {
            $indiceAleatorio = rand(0, $longitudCaracteres - 1);
            $contrasena .= $caracteres[$indiceAleatorio];
        }
        // echo $contraseña;
        return $contrasena;
    }

    public function getEditarContrasena($id, $nuevaContrasena){

        $contrasenaCodificada = password_hash($nuevaContrasena, PASSWORD_BCRYPT);
        $data = array(                 
            'contrasena'=> $contrasenaCodificada
        );
        $this->db->where('id',$id);
        $actualizacionExitosa = $this->db->update('usuarios_alumni',$data); 

        if ($actualizacionExitosa) {
            return true; 
        } else {
            return false;
        }
    }

    
    
}
