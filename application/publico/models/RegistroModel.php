<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class RegistroModel extends CI_Model {

    public function getDatosSede(){
        $this->db->select('se.*');
        $this->db->from('sede as se');
        $this->db->where('se.estado', 'activo');
        $resultado = $this->db->get()->result();
        return $resultado;
    }

    public function getDatosCarrera(){
        $this->db->select('ca.*');
        $this->db->from('carrera as ca');
        $this->db->where('ca.estado', 'activo');
        $resultado = $this->db->get()->result();
        return $resultado;
    }

    public function verificar($sede, $carrera, $ci) {
        $queryRegi = $this->db->get_where('usuarios_alumni', array('sede_id' => $sede, 'carrera_id' => $carrera, 'ci' => $ci));

        if ($queryRegi->num_rows() === 1) {
            $respuesta = array('estado'=>true, 'tipo'=> 'registrado');
            return $respuesta; // Credenciales válidas
        } else {
            $queryVeri = $this->db->get_where('estudiantes_y_titulados', array('sede_id' => $sede, 'carrera_id' => $carrera, 'ci' => $ci));
            if ($queryVeri->num_rows() === 1) {
                $respuesta = array('estado'=>true, 'tipo'=> 'verificado', 'datos'=>$queryVeri->row());
                return $respuesta; // Credenciales válidas
            } else {
                $respuesta = array('estado'=>false);
                return $respuesta; // Credenciales inválidas
            }
        }
    }

    public function registrar($est_tit_id, $celular, $email, $contrasena) {
        // Encriptar la contraseña
        $passEncriptado = password_hash($contrasena, PASSWORD_BCRYPT);

        // Obtener los datos del usuario
        $this->db->select('*');
        $this->db->from('estudiantes_y_titulados');
        $this->db->where('id', $est_tit_id);
        $resultado = $this->db->get()->row();

        $data = array(    
            'sede_id' => $resultado->sede_id,
            'carrera_id' => $resultado->carrera_id,
            'rol_id' => $resultado->rol_id,
            'semestre' => $resultado->semestre,
            'anio_titulado' => $resultado->anio_titulado,
            'ci' => $resultado->ci,
            'nombres' => $resultado->nombres,
            'apellidos' => $resultado->apellidos,
            'celular' => $celular,
            'email' => $email,
            'contrasena' => $passEncriptado,
            'estado' => 'activo'
        );

        $this->db->set('fecha_creacion', 'NOW()', FALSE);
        $this->db->insert('usuarios_alumni', $data);

        // Obtener el ID recién insertado
        $nuevoId = $this->db->insert_id();

        if ($nuevoId > 0) {
            $respuesta = array('estado'=>true, 'registro_id'=>$nuevoId, 'rol_id'=>$resultado->rol_id);
            return $respuesta; // Registro válidas
        } else {
            $respuesta = array('estado'=>false);
            return $respuesta; // Registro inválidas
        }
    }

    public function generarContrasena() {
        $longitud = 12;
        // Caracteres permitidos en la contraseña
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';

        // Obtener la longitud del conjunto de caracteres
        $longitudCaracteres = strlen($caracteres);

        // Inicializar la contraseña
        $contraseña = '';

        // Generar la contraseña aleatoriamente
        for ($i = 0; $i < $longitud; $i++) {
            $indiceAleatorio = rand(0, $longitudCaracteres - 1);
            $contraseña .= $caracteres[$indiceAleatorio];
        }
        // echo $contraseña;
        return $contraseña;
    }

}
