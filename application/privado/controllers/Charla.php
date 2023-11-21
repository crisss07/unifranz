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

	
}
