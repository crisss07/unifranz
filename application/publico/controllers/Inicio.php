<?php
class Inicio extends CI_Controller {
	
    function __construct() 
    {
        parent::__construct();
		$this->load->helper(array('url','form','html'));
        $this->load->model('InicioModel');
        $this->load->model('LoginModel');
        $this->load->model('LoginEmpresaModel');
        $this->load->model('ProgramasModel');
        $this->load->library('form_validation');
        session_start();
        if (!isset($_SESSION['alumni_id'])) {
            redirect('Login');
        }
		
    }
	
	public function index()
	{
		if (!isset($_SESSION['alumni_id'])){
            $this->load->view('login/login');
        }
        else {
            if ($_SESSION['rol_id'] != 3) {
                if (!isset($_SESSION['nombres'])) {
                    $user_id = $_SESSION['alumni_id'];
                    $user = $this->LoginModel->getDatosUsuario($user_id);
                    $_SESSION['nombres'] = $user->nombres;
                    $_SESSION['rol'] = $user->rol;
                }
    			$contenido['charlas'] = $this->ProgramasModel->getProgramas();
    			$data['contenido'] = $this->load->view('inicio/inicio', $contenido, true);
    			$this->load->view('plantilla/plantilla', $data);
                // echo 'hola desde pagina inicio '.$_SESSION['nombres'];
            } else {
                redirect('Inicio/empresas');
            }
        }
	}
	
	public function empresas()
	{
		if (!isset($_SESSION['alumni_id'])){
            $this->load->view('login/login');
        } else {
            if ($_SESSION['rol_id'] == 3) {
                if (!isset($_SESSION['nombres'])) {
                    $user_id = $_SESSION['alumni_id'];
                    $user = $this->LoginEmpresaModel->getDatosUsuario($user_id);
                    $_SESSION['nombres'] = $user->razon_social;
                    $_SESSION['rol'] = $user->rol;
                }
                $contenido['charlas'] = $this->ProgramasModel->getProgramas();
                $data['contenido'] = $this->load->view('inicio/inicio-empresas', $contenido, true);
                $this->load->view('plantilla/plantilla', $data);
            } else {
                redirect('Inicio');
            }
            
        }
	}
	
	public function ajax_registrarCharla() {
        $charla_id = $this->input->post('charla_id');
        $alumni_id = $_SESSION['alumni_id'];
        $charla = $this->InicioModel->registrarCharla($charla_id, $alumni_id);
        if ($charla['estado']) {
            $data = array('error' => false, 'message' => $charla['message']);
        } else {
            $data = array('error' => true, 'message' => $charla['message']);
        }
        echo json_encode($data);
    }

	
}
