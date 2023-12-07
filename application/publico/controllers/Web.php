<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('LoginModel');
        $this->load->model('RegistroModel');
        $this->load->model('ProgramasModel');
        $this->load->library('form_validation');
        session_start();  
    }

    public function index() {
		// $contenido['charlasLP'] = $this->ProgramasModel->getProgramas("La Paz - El Alto");
    	// $contenido['charlasSC'] = $this->ProgramasModel->getProgramas("Santa Cruz");
    	$contenido['charlas'] = $this->ProgramasModel->getProgramas("Cochabamba");
        $this->load->view('web/index', $contenido);
    }
    
    public function p() {
        $this->load->view('web/plantilla');
    }
}
