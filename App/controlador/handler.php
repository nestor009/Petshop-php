<?php  
include('ctrlUsuarios.php');
include ('../entidades/usuario.php');
//if ($_POST['metodo'] == 'ALTA')
//mas comprobaciones y bla bla
{
	$cUsuarios = new ctrlUsuarios();
	$user = $_POST['txtUsuario'];
	$nombre = $_POST["txtNombre"];
	$apellido = $_POST["txtApellido"];
	$email = $_POST["txtEmail"]
	$oU = new Usuario($user,'',$nombre,$apellido,$email,true,'')
	$cUsuarios->Alta($oU);
}



?>