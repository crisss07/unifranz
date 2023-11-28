<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class CharlaModel extends CI_Model {

    public function getDatosCharlas() {
        $this->db->select('cha.*, COUNT(ic.charla_id) as numero_inscritos');
        $this->db->from('charlas as cha');
        $this->db->join('inscritos_charlas as ic', 'cha.id = ic.charla_id', 'left');
        // $this->db->where('cha.estado', 'activo');
        $this->db->group_by('cha.id'); // Corregir para agrupar por el ID de charla
        $this->db->order_by('cha.id', 'DESC');
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

    public function getDatosCharlaId($id) {
        $this->db->select('cha.*');
        $this->db->from('charlas as cha');
        $this->db->where('cha.id', $id);
        $resultado = $this->db->get()->row();
        return $resultado;
    }
    
    public function registrar_charla($empresa, $tema, $descripcion, $expositor, $fecha, $horario, $sede, $modalidad, $estado) {
        $data = array(    
            'empresa' => $empresa,
            'tema' => $tema,
            'descripcion' => $descripcion,
            'expositor' => $expositor,
            'fecha' => $fecha,
            'horario' => $horario,
            'sede' => $sede,
            'modalidad' => $modalidad,
            'estado' => $estado
        );
        $this->db->set('fecha_creacion', 'NOW()', FALSE);
        $this->db->insert('charlas', $data);

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

    public function editar_charla($id, $empresa, $tema, $descripcion, $expositor, $fecha, $horario, $sede, $modalidad, $estado) {
        $data = array(    
            'empresa' => $empresa,
            'tema' => $tema,
            'descripcion' => $descripcion,
            'expositor' => $expositor,
            'fecha' => $fecha,
            'horario' => $horario,
            'sede' => $sede,
            'modalidad' => $modalidad,
            'estado' => $estado
        );
        $this->db->set('fecha_edicion', 'NOW()', FALSE);
        $this->db->where('id', $id);
        $this->db->update('charlas', $data);

        // Verificar si la actualización fue exitosa
        if ($this->db->affected_rows() > 0) {
            $respuesta = array('estado'=>true, 'tipo'=>'edicion');
            return $respuesta; // Registro válidas
        } else {
            $respuesta = array('estado'=>false);
            return $respuesta; // Registro inválidas
        }
    }

    public function eliminar_inscrito($id) {
        $this->db->where('id', $id);
        $this->db->delete('inscritos_charlas');

        // Verificar si la eliminación fue exitosa
        if ($this->db->affected_rows() > 0) {
            $respuesta = array('estado' => true);
            return $respuesta; // Registro eliminado
        } else {
            $respuesta = array('estado' => false);
            return $respuesta; // No se pudo eliminar el registro
        }
    }
}
