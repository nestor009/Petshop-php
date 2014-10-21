
<?php 
class Usuario{
	
	private $user;
	private $pass;
	private $nombre;
	private $apellido;
	private $email;
	private $estado;
	private $grupos;

	public function __construct(){
		
	}

	public function __construct($iuser, $ipass, $inombre, $iapellido, $iemail, $iestado,$igrupos){
		
		$this->user = $iuser;
		$this->pass = $ipass;
		$this->nombre = $inombre;
		$this->apellido = $iapellido;
		$this->email = $iemail;
		$this->estado = $iestado;
		$this->grupos = $igrupos;
	}

	public function getNombre(){

		return $this->nombre;		
	}

	public function setNombre($value){
		
		$this->nombre = $value;
	}

	public function getApellido(){

		return $this->apellido; 
	}

	public function setApellido($value){
		
		$this->apellido = $value;
	}

	public function getUser(){
		
		return $this->user;	
	}

	public function getPass(){
		
		return $this->pass;
	}

	public function getEmail(){
		
		return $this->email;
	}

	public function setEmail($value){
		
		$this->email = $value;
	}

	public function getEstado(){
		
		return $this->estado;
	}

	public function setEstado($value){
		
		$this->estado = $value;
	}

	public function getGrupos(){
		
		return $this->grupos; 
	}

	public function setGrupos($value){
		
		$this->grupos= $value;
	}








}

?>