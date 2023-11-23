<?php
class UsuariosEmpresa extends CI_Controller {
	
    function __construct() 
    {
        parent::__construct();
		$this->load->helper(array('url','form','html'));
        $this->load->model('UsuariosEmpresaModel');
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
        	$contenido['usuariosEmpresa'] = $usuariosEmpresa = $this->UsuariosEmpresaModel->getDatosUsuariosEmpresa();
			$data['contenido'] = $this->load->view('usuario/usuariosEmpresa', $contenido, true);
			$this->load->view('plantilla/plantilla_privada', $data);
        }
	}
	
}
