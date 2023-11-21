<?php
class UsuariosAlumni extends CI_Controller {
	
    function __construct() 
    {
        parent::__construct();
		$this->load->helper(array('url','form','html'));
        $this->load->model('UsuariosAlumniModel');
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
        	$contenido['usuariosAlumni'] = $usuariosAlumni = $this->UsuariosAlumniModel->getDatosUsuariosAlumni();
			$data['contenido'] = $this->load->view('usuario/usuariosAlumni', $contenido, true);
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

        	$contenido['titulo'] = $this->UsuariosAlumniModel->getDatosTitulo($idCharla);
        	$contenido['inscritos'] = $inscritos = $this->UsuariosAlumniModel->getDatosInscritos($idCharla);
			$data['contenido'] = $this->load->view('charla/charla_inscritos', $contenido, true);
			$this->load->view('plantilla/plantilla_privada', $data);
        }
	}
	
}
