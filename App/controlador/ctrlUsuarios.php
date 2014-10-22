<?php
	include("../modelo/base_datos.php");
	include("../entidades/usuario.php");
	include("../modelo/catUsuarios.php");


class ctrlUsuarios{

	private $base_datos;
	private $catalogo;
	//static $inst = null;
	

	/*public static function obtenerInstancia()
    {
	       
	        if ($inst === null) {
	            $inst = new ctrlUsuarios();
	        }
	        return $inst;
    }*/

    // * * * *  * * * *  ABM
    function Alta($objuser){
    	$this->conectar();
    	$cat = new catUsuarios();
    	if ($cat->NuevoUsuario())
    		return true;
    	else
    		return false;
    }


    //<-- ABM

	public function obtenerUsuarios(){
		$this->conectar();
		$cat = new catUsuarios();
		
		return $cat->getUsuarios();
	}



	private function conectar(){
		$instbase = new base_datos();
		if($instbase->conectarBase()===true){
			return true;
		}
		else{
			echo "error al conectarse";
			return false;
		}

	}


}
?>
