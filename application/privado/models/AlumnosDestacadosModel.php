<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class AlumnosDestacadosModel extends CI_Model {

    public function getDatosAlumnosDestacados() {
        $this->db->select('ua.id, ua.datos_contacto, ua.edad, ua.tipo, ua.promedio, ua.competencias, ua.ocupacion_actual, ua.descripcion_personal, ua.ubicacion, ua.adjunto_cv, se.sede, ca.carrera, ua.estado');
        $this->db->from('alumnos_destacados as ua');
        $this->db->join('sede as se', 'ua.sede_id = se.id');
        $this->db->join('carrera as ca', 'ua.carrera_id = ca.id');
        $this->db->where('ua.estado', 'activo');
        $resultado = $this->db->get()->result();
        return $resultado;
    }
    
}