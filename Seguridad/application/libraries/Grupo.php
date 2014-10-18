<?php
public class Grupo{
	private $codigo;
	private $descripcion;
	private $estado;


	public function __construct(){

	}

	public function __construct($icodigo,$idescripcion,$iestado){
		$this->codigo = $icodigo;
		$this->descripcion = $idescripcion;
		$this->estado = $iestado;
	}

	public function getCodigo(){
		return $this->codigo;
	}

	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion($value){
		$this->descripcion = $value;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEstado($value){
		$this->estado = $value;
	}
}

?>