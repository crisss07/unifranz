<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginEmpresa extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('LoginEmpresaModel');
        $this->load->model('RegistroModel');
        $this->load->library('form_validation');
        session_start();  
    }

    public function index() {
        if (!isset($_SESSION['alumni_id'])){
            $this->load->view('login_empresa/login');
        }
        else {
            redirect('Inicio/empresas');
        }
    }

    public function ajax_login() {
        $this->form_validation->set_rules('usuario', 'Usuario', 'required');
        $this->form_validation->set_rules('contrasena', 'Contraseña', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array('error' => true, 'message' => validation_errors());
        } else {
            $usuario = $this->input->post('usuario');
            $contrasena = $this->input->post('contrasena');
            $empresa = $this->LoginEmpresaModel->check_login($usuario, $contrasena);
            if ($empresa['estado']) {
                $_SESSION['alumni_id'] = $empresa['id'];
                $_SESSION['rol_id'] = $empresa['rol_id'];
                $data = array('error' => false, 'message' => 'Inicio de sesión exitoso.');
            } else {
                $data = array('error' => true, 'message' => 'Usuario o contraseña incorrectos.');
            }
        }
        echo json_encode($data);
    }

    public function cerrarSesion() {
        session_destroy();
        redirect('Login');
    }

}
