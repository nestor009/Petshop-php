<?php

 class base_datos{

//static $inst = null;

 /*public static function Instance()
    {
	        
	        if ($inst === null) {
	            $inst = new base_datos();
	        }
	        return $inst;
    }*/

    
 public function __construct()
    {

    }



function conectarBase(){

	include("../config.php");

	if (!$enlace = @mysql_connect($host,$usuario,$clave)){

		return false;
	
	} elseif (!mysql_select_db($base)){
	
		return false;
	
	} else {
	
		return true;
	
	}


}

}

?>