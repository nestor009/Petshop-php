<?php
    /*Clase singleton*/
	public class catUsuarios{
    
      

       private $Usuarios = array();

  	   public static function Instance()
    	{
	        static $inst = null;
	        if ($inst === null) {
	            $inst = new catUsuarios();
	        }
	        return $inst;
    	}

    
    	private function __construct()
    	{

    	}

    	public function getUsuarios(){
    		return $this->Usuarios;
    	}

    	public function NuevoUsuario(Usuario $objuser){
    		array_push($this->Usuarios, $objuser);
    	}

    	public function EliminarUsuario(Usuario $objuser){
    		
    	}

    	public function EditarUsuario(Usuario $objuser){

    	}
}

?>