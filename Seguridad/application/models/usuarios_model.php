<?php
class Usuarios_model extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function obtener_Usuarios(){


		$query=$this->db->get('Usuarios');
		//$query = $this->db->query("call ObtenerUsuarios()");
		return $query->result_array();
	}

	/*function nuevo_usuario($usuario,$nombre,$apellido,$email){
		return $this->db->query("call NuevoUsuario(".$usuario.",asdasd,".$nombre.",".$apellido.",".$email.");");
	}*/
}
?>