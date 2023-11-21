<?php
class Inicio extends CI_Controller {
	
    function __construct() 
    {
        parent::__construct();
		$this->load->helper(array('url','form','html'));
        $this->load->model('InicioModel');
        $this->load->model('LoginModel');
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
        	$user_id = $_SESSION['usuario_id'];
        	$user = $this->LoginModel->getDatosUsuario($user_id);
        	$_SESSION['nombres'] = $user->nombres;
        	$_SESSION['apellidos'] = $user->apellidos;
        	$_SESSION['email'] = $user->email;
        	$_SESSION['rol'] = $user->rol;

        	$contenido['hola'] = 'hola';
			$data['contenido'] = $this->load->view('inicio/inicio', $contenido, true);
			$this->load->view('plantilla/plantilla_privada', $data);
        }
	}

	
}
