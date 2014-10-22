<?php 
    /*Clase singleton*/
	class catUsuarios{
       private $Usuarios = array();

  	   /*public static function Instance()
    	{
	        
	        if ($inst === null) {
	            $inst = new catUsuarios();
	        }
	        return $inst;
    	}*/

    
    	public function __construct()
    	{

    	}

    	public function getUsuarios(){
    		if(empty($this->Usuarios)){

    			$query = "call ObtenerUsuarios()";
    			$resultado = mysql_query($query);
                $listadoUsuarios = array();
                
                //convertimos resultado en un array asociativo y le pasamos cada fila al array listadoUsuarios
                while ($fila = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
                   //echo $fila["usuario"]."  ".$fila["nombre"]."  ".$fila["apellido"]."  ".$fila["email"]."<br>";

                   array_push($listadoUsuarios,$fila);
                }
    		}

            $this->setUsuarios($listadoUsuarios);
    		return $this->Usuarios;
    	}
    	private function setUsuarios($value){
    		$this->Usuarios = $value;
    	}

    	public function NuevoUsuario(Usuario $objuser){
            $query = "call NuevoUsuario($objuser.getUser(),'',$objuser.getNombre(),
                $objuser.getApellido(),$objuser.getEmail())";
            if (mysql_query($query))
            {
    		  array_push($this->Usuarios, $objuser);
              return true;
            }
            return false;
    	}

    	public function EliminarUsuario(Usuario $objuser){
    		
    	}

    	public function EditarUsuario(Usuario $objuser){

    	}
}

?>





