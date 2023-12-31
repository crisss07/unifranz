<?php
class Charla extends CI_Controller {
	
    function __construct() 
    {
        parent::__construct();
		$this->load->helper(array('url','form','html'));
        $this->load->model('CharlaModel');
        $this->load->library('form_validation');
        session_start();
        if (!isset($_SESSION['usuario_id'])) {
            redirect('Login');
        }
    }
	
	public function index()
	{
		if (!isset($_SESSION['usuario_id'])){
            $this->load->view('login/login');
        }
        else {
        	$contenido['charlas'] = $charlas = $this->CharlaModel->getDatosCharlas();
			$data['contenido'] = $this->load->view('charla/inicio', $contenido, true);
			$this->load->view('plantilla/plantilla_privada', $data);
        }
	}

	public function inscritos($idCharlaEncriptado)
	{
		if (!isset($_SESSION['usuario_id'])){
            $this->load->view('login/login');
        }
        else {
        	$idCharla = base64_decode($idCharlaEncriptado);
        	// var_dump($idCharla);
        	// exit;

        	$contenido['titulo'] = $this->CharlaModel->getDatosTitulo($idCharla);
        	$contenido['idCharla'] = $idCharla;
        	$contenido['inscritos'] = $inscritos = $this->CharlaModel->getDatosInscritos($idCharla);
			$data['contenido'] = $this->load->view('charla/charla_inscritos', $contenido, true);
			$this->load->view('plantilla/plantilla_privada', $data);
        }
	}

	public function nuevo($idCodificado = null)
	{
		if (!isset($_SESSION['usuario_id'])){
            $this->load->view('login/login');
        }
        else {
        	if ($idCodificado !== null) {
        		$id = base64_decode($idCodificado);
	            $contenido['datos_charla'] = $this->CharlaModel->getDatosCharlaId($id);
	            $contenido['nuevo'] = 'no';
				$data['contenido'] = $this->load->view('charla/nuevo', $contenido, true);
				$this->load->view('plantilla/plantilla_privada', $data);
	        } else {
	            $contenido['nuevo'] = 'si';
				$data['contenido'] = $this->load->view('charla/nuevo', $contenido, true);
				$this->load->view('plantilla/plantilla_privada', $data);
	        }
        	
        }
	}

	public function registrar_nuevo()
	{
		$this->form_validation->set_rules('empresa', 'Empresa', 'required');
        $this->form_validation->set_rules('tema', 'Tema', 'required');
        $this->form_validation->set_rules('expositor', 'Expositor', 'required');
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('horario', 'Horario', 'required');
        $this->form_validation->set_rules('sede', 'Sede', 'required');
        $this->form_validation->set_rules('modalidad', 'Modalidad', 'required');
        $this->form_validation->set_rules('estado', 'Estado', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array('error' => true, 'message' => $this->form_validation->error_array());
        } else {
        	$id = $this->input->post('id_charla');
	        $empresa = $this->input->post('empresa');
	        $tema = $this->input->post('tema');
	        $descripcion = $this->input->post('descripcion');
	        $expositor = $this->input->post('expositor');
	        $fecha = $this->input->post('fecha');
	        $horario = $this->input->post('horario');
	        $sede = $this->input->post('sede');
	        $modalidad = $this->input->post('modalidad');
	        $estado = $this->input->post('estado');
	        if (empty($id)) {
			    $charla = $this->CharlaModel->registrar_charla($empresa, $tema, $descripcion, $expositor, $fecha, $horario, $sede, $modalidad, $estado);
			} else {
			    $charla = $this->CharlaModel->editar_charla($id, $empresa, $tema, $descripcion, $expositor, $fecha, $horario, $sede, $modalidad, $estado);
			}
	        
	        if ($charla['estado']) {
	        	if ($charla['tipo'] == 'nuevo') {
	        		$data = array('error' => false, 'message' => 'Se registro correctamente');
	        	} else {
	        		$data = array('error' => false, 'message' => 'Se edito correctamente');
	        	}
	        } else {
	        	$data = array('error' => true, 'message' => 'Algo salio mal, vuelva a intentarlo');
	        }
	        
	    }
      
        echo json_encode($data);
	}

	public function eliminar_inscrito()
	{
        $idCharlaEncriptado = $this->input->post('id');
        $id = base64_decode($idCharlaEncriptado);
        $charla = $this->CharlaModel->eliminar_inscrito($id);
        
        if ($charla['estado']) {
        	$data = array('error' => false, 'message' => 'Se elimino el registro correctamente');
        } else {
        	$data = array('error' => true, 'message' => 'No se pudo eliminar el registro');
        }
      
        echo json_encode($data);
	}
	
}
