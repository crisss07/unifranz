<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class InicioModel extends CI_Model {

    public function registrarCharla($charla_id, $alumni_id) {
        $this->db->select('id');
        $this->db->from('inscritos_charlas');
        $this->db->where('usuario_alumni_id', $alumni_id);
        $this->db->where('charla_id', $charla_id);
        $this->db->where('estado', 'activo');
        $resultado = $this->db->get()->row();

        if ($resultado) {
            $respuesta = array('estado'=>false, 'message'=>'Ya se encuentra inscrito en esta charla');
            return $respuesta; 
        } else {
            $fecha=date('Y-m-d');
            $data = array(                 
                'usuario_alumni_id'=> $alumni_id,
                'charla_id'=> $charla_id,
                'fecha'=> $fecha,
                'estado'=> 'activo'
            );
            $this->db->set('fecha_creacion', 'NOW()', FALSE);
            $this->db->insert('inscritos_charlas', $data);
            $this->db->insert_id();  

            $respuesta = array('estado'=>true, 'message'=>'Se registro correctamente a la charla');
            return $respuesta;
        }

        
    }
    
}
