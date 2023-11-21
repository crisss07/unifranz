<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('LoginModel');
        $this->load->library('form_validation');
        session_start();  
    }

    public function index() {
        if (!isset($_SESSION['usuario_id'])){
            $this->load->view('login/login');
        }
        else {
            redirect('Inicio');
        }
    }

    public function ajax_login() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array('error' => true, 'message' => validation_errors());
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $user = $this->LoginModel->check_login($email, $password);
            if ($user['estado']) {
                $_SESSION['usuario_id'] = $user['datos'][0]->id;
                $data = array('error' => false, 'message' => 'Inicio de sesión exitoso.');
            } else {
                $data = array('error' => true, 'message' => 'Email o contraseña incorrectos.');
            }
        }
        echo json_encode($data);
    }

    public function cerrarSesion() {
        session_destroy();
        redirect('Login');
    }
}
