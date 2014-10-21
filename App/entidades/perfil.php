<?php 

class Perfil{
	
	private $grupo;
	private $formulario;
	private $permiso;


	/*public function __construct(){

	}*/

	public function __construct($igrupo,$iformulario,$ipermiso){

		$this->grupo = $igrupo;
		$this->formulario = $iformulario;
		$this->permiso = $ipermiso;	
	}

	public function getGrupo(){
		return $this->grupo;
	}

	public function getFormulario(){
		return $this->formulario;
	}

	public function getPermiso(){
		return $this->permiso;
	}

}







?>