<?php
class AlumnosDestacados extends CI_Controller {
	
    function __construct() 
    {
        parent::__construct();
		$this->load->helper(array('url','form','html'));
        $this->load->model('AlumnosDestacadosModel');
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
        	$contenido['alumnosDestacados'] = $alumnosDestacados = $this->AlumnosDestacadosModel->getDatosAlumnosDestacados();
			$data['contenido'] = $this->load->view('alumno/alumnosDestacados', $contenido, true);
			$this->load->view('plantilla/plantilla_privada', $data);
        }
	}
	
}
