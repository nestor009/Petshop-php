<?php 

public class Permiso{
	private $codigo;
	private $descripcion;


	public function __construct(){

	}

	public function __construct($icodigo,$idescripcion){

		$this->codigo = $icodigo;
		$this->descripcion = $idescripcion;
	}


	public function getCodigo(){
		return $this->codigo; 
	}

	public function getDescripcion(){
		return $this->Descripcion;
	}

	public function setDescripcion($value){
		$this->Descripcion = $value;
	}
}

?>