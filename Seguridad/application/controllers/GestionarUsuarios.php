<?php
class GestionarUsuarios extends CI_Controller{
	
	public function mostrar_usuarios(){
		$this->load->model('Usuarios_model');
		$listadoUsuarios = $this->Usuarios_model->obtener_Usuarios();

        $infoUsuarios = array();

        foreach($listadoUsuarios as $u){
        	$itemUsuario = array();
        	$itemUsuario['usuario'] = $u['usuario'];
        	$itemUsuario['nombre'] = $u['nombre'];
        	$itemUsuario['apellido'] = $u['apellido'];
        	$itemUsuario['email'] = $u['email'];

        	$infoUsuarios[] = $itemUsuario;
        }

        $data = array('usuarios'=> $infoUsuarios);
        $this->load->view('Usuarios',$data);
	}

	public function nuevo_usuario(){
		$this->load->helper('form');
                /*implementar validacion de formulario*/
		$this->load->view('nuevo_usuario');


                /*tomo los datos del post y se los paso al modelo*/

                /*
                $usuario = $this->input->post('usuario'); 
                $nombre =  $this->input->post('nombre');
                $apellido = $this->input->post('apellido');
                $email = $this->input->post('email');
                */ 

                //$this->load->model('usuarios_model');
                //$this->usuarios_model->nuevo_usuario($usuario,$nombre,$apellido,$email);

                //$this->load->view('nuevo_usuario');
	}
}
?>