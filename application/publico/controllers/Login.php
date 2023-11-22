<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('LoginModel');
        $this->load->model('RegistroModel');
        $this->load->library('form_validation');
        session_start();  
    }

    public function index() {
        if (!isset($_SESSION['alumni_id'])){
            $this->load->view('login/login');
        }
        else {
            redirect('Inicio');
        }
    }

    public function ajax_login() {
        $this->form_validation->set_rules('ci', 'Carnet Identidad', 'required|numeric');
        $this->form_validation->set_rules('contrasena', 'Contraseña', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array('error' => true, 'message' => validation_errors());
        } else {
            $ci = $this->input->post('ci');
            $contrasena = $this->input->post('contrasena');
            $user = $this->LoginModel->check_login($ci, $contrasena);
            if ($user['estado']) {
                $_SESSION['alumni_id'] = $user['id'];
                $_SESSION['rol_id'] = $empresa['rol_id'];
                $data = array('error' => false, 'message' => 'Inicio de sesión exitoso.');
            } else {
                $data = array('error' => true, 'message' => 'Carnet de Identidad o contraseña incorrectos.');
            }
        }
        echo json_encode($data);
    }

    public function registro() {
        $datos['sede'] = $this->RegistroModel->getDatosSede();
        $datos['carrera'] = $this->RegistroModel->getDatosCarrera();
        $this->load->view('login/registro', $datos);
    }

    public function ajax_verifica() {
        $this->form_validation->set_rules('sede', 'Sede', 'required|numeric');
        $this->form_validation->set_rules('carrera', 'Carrera', 'required|numeric');
        $this->form_validation->set_rules('ci', 'CI.', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data = array('error' => true, 'message' => validation_errors());
        } else {
            $sede = $this->input->post('sede');
            $carrera = $this->input->post('carrera');
            $ci = $this->input->post('ci');
            $registro = $this->RegistroModel->verificar($sede, $carrera, $ci);
            if ($registro['estado']) {
                if ($registro['tipo'] == 'registrado') {
                    $data = array('error' => false, 'tipo' => 'registrado', 'message' => 'Usted ya se registro anteriormente al sistema');
                } else {
                    $est_tit_id = $registro['datos']->id;
                    $data = array('error' => false, 'tipo' => 'validado', 'message' => 'Usuario Verificado', 'est_titu_id'=>$est_tit_id);
                }
            } else {
                $data = array('error' => true, 'tipo' => 'no existe', 'message' => 'Error en la verificación');
            }
        }
        echo json_encode($data);
    }

    public function ajax_registrar() {
        $this->form_validation->set_rules('celular', 'Celular', 'required|numeric|min_length[8]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contrasena', 'Contraseña.', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $data = array('error' => true, 'message' => validation_errors());
        } else {
            $est_tit_id = $this->input->post('est_tit_id');
            $celular = $this->input->post('celular');
            $email = $this->input->post('email');
            $contrasena = $this->input->post('contrasena');
            $registro = $this->RegistroModel->registrar($est_tit_id, $celular, $email, $contrasena);
            if ($registro['estado']) {
                $_SESSION['alumni_id'] = $registro['registro_id'];
                $data = array('error' => false, 'tipo' => 'registrado', 'message' => 'Se registro correctamente');
            } else {
                $data = array('error' => true, 'tipo' => 'no existe', 'message' => 'Error');
            }
        }
        echo json_encode($data);
    }

    public function ajax_recuperar() {

        $ci = $this->input->post('carnetIdentidad');
        $user = $this->LoginModel->getVerificaCi($ci);
        if ($user['estado']) {
            $nuevaContrasena = $this->LoginModel->getNuevaContrasena();
            $editarContrasena = $this->LoginModel->getEditarContrasena($user['id'], $nuevaContrasena);
            if ($editarContrasena) {
                $this->envioCorreoRecuperarContrasena($user['nombres'],$user['apellidos'],$user['email'],$nuevaContrasena);
                $data = array('error' => false, 'message' => 'Se le envió su contraseña al email: ' . $user['email']);
            } else {
                $data = array('error' => true, 'message' => 'No se pudo recuperar su contraseña, intentelo nuevamente');
            }
        } else {
            $data = array('error' => true, 'message' => 'Este Carnet de Identidad no esta registrado. Por favor registrese');
        }
        echo json_encode($data);
    }

    // envio de correo recuperar contraseña
    function envioCorreoRecuperarContrasena($nombres,$apellidos,$email,$contrasena) 
    {   
        $fecha=date('Y-m-d');
        $hora=date('h:i:s');
        $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://appserv.danaconnect.com/api/1.0/rest/conversation/424435/start/data',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                    "UNIF-RECU-PASS_NOMBRES": "'.$nombres.'",
                    "UNIF-RECU-PASS_APELLIDOS": "'.$apellidos.'",
                    "UNIF-RECU-PASS_CORREO": "'.$email.'",
                    "UNIF-RECU-PASS_CONTRASEÑA": "'.$contrasena.'",
                    "UNIF-RECU-PASS_FECHA": "'.$fecha.'",
                    "UNIF-RECU-PASS_HORA": "'.$hora.'"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Basic d2Vic2VydmljZXNAZGliZWw6RDFiM2w5cDFzLg==',
                    'Content-Type: application/json'
                  ),
            ));

        $response = curl_exec($curl);
        curl_close($curl);
    }

    public function cerrarSesion() {
        session_destroy();
        redirect('Login');
    }

    public function contra(){
        // Contraseña a hashear
        $contrasena = "vane12345678";

        // Generar hash bcrypt
        $hash = password_hash($contrasena, PASSWORD_BCRYPT);

        // Imprimir el hash
        echo "Hash Bcrypt: " . $hash;
        $dato = '$2y$10$pfvaq1X/PK21DXPEoTlxX.uUOazgSg8dvJSBZ5YFxinXk7NaTtMZa';

        $dato = '$2y$10$N8KfXW2TX.RdHZ.LlD7l7.OgmFw2qBs4gvUm7wVZ758wuWzGu0M3e';
        $dato = '$2y$12$elTtqiv4YTQZ7yD7bm8xxu4H2wu2s7wu0U7ODRFpS.peIIY/vZ2zG';


    }

    public function contras($contrasena){
        $hash = password_hash($contrasena, PASSWORD_BCRYPT);
        echo $hash;
    }

}
