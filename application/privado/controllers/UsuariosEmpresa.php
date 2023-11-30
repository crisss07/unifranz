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

    public function nuevo($idCodificado = null)
    {
        if (!isset($_SESSION['usuario_id'])){
            $this->load->view('login/login');
        }
        else {
            if ($idCodificado !== null) {
                $id = base64_decode($idCodificado);
                $contenido['datos_empresa'] = $this->UsuariosEmpresaModel->getDatosEmpresaId($id);
                $contenido['nuevo'] = 'no';
                $data['contenido'] = $this->load->view('usuario/nuevaEmpresa', $contenido, true);
                $this->load->view('plantilla/plantilla_privada', $data);
            } else {
                $contenido['nuevo'] = 'si';
                $data['contenido'] = $this->load->view('usuario/nuevaEmpresa', $contenido, true);
                $this->load->view('plantilla/plantilla_privada', $data);
            }
            
        }
    }

    public function registrar_nuevo()
    {
        $id = $this->input->post('id_empresa');
        if (empty($id)) {
            $this->form_validation->set_rules('razon_social', 'Razón Social', 'required');
            $this->form_validation->set_rules('usuario', 'Usuario', 'required|callback_verificar_usuario_unico|regex_match[/^[a-zA-Z0-9]+$/]', array('regex_match' => 'El campo {field} no tiene que tener espacios y solo debe contener letras y números.'));
            $this->form_validation->set_rules('contrasena', 'Contraseña', 'required|min_length[6]');
            $this->form_validation->set_rules('estado', 'Estado', 'required');
        } else {
            $this->form_validation->set_rules('razon_social', 'Razón Social', 'required');
            $this->form_validation->set_rules('estado', 'Estado', 'required');
        }
       
        if ($this->form_validation->run() == FALSE) {
            $data = array('error' => true, 'message' => $this->form_validation->error_array());
        } else {
            if (empty($id)) {
                $razon_social = $this->input->post('razon_social');
                $nit = $this->input->post('nit');
                $tipo_empresa = $this->input->post('tipo_empresa');
                $telefono = $this->input->post('telefono');
                $direccion = $this->input->post('direccion');
                $usuario = $this->input->post('usuario');
                $contrasena = $this->input->post('contrasena');
                $estado = $this->input->post('estado');
                $empresa = $this->UsuariosEmpresaModel->registrar_empresa($razon_social, $nit, $tipo_empresa, $telefono, $direccion, $usuario, $contrasena, $estado);
            } else {
                $razon_social = $this->input->post('razon_social');
                $nit = $this->input->post('nit');
                $tipo_empresa = $this->input->post('tipo_empresa');
                $telefono = $this->input->post('telefono');
                $direccion = $this->input->post('direccion');
                $estado = $this->input->post('estado');
                $empresa = $this->UsuariosEmpresaModel->editar_empresa($id, $razon_social, $nit, $tipo_empresa, $telefono, $direccion, $estado);
            }
            
            if ($empresa['estado']) {
                if ($empresa['tipo'] == 'nuevo') {
                    $data = array('error' => false, 'message' => 'Se registro correctamente');
                } else {
                    $data = array('error' => false, 'message' => 'Se edito correctamente');
                }
            } else {
                $data = array('error' => true, 'message' => 'Algo salio mal, vuelva a intentarlo');
            }
            
        }
      
        echo json_encode($data);
    }

    public function verificar_usuario_unico($usuario) {
        $verificar = $this->UsuariosEmpresaModel->verificarUsuario($usuario); 
        if ($verificar) {
            $this->form_validation->set_message('verificar_usuario_unico', 'El nombre de usuario ya se encuentra registrado.');
            return FALSE; 
        } else {
            return TRUE; 
        }
    }

    public function ajax_nuevaContrasena() {

        $empresa_id = $this->input->post('empresa_id');
        $contrasena_new = $this->input->post('contrasena_new');
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
	
}
