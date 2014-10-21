<?php

include("../controlador/ctrlUsuarios.php");
include("../entidades/usuario.php");



$ctrl = new ctrlUsuarios();
$usuarios = $ctrl->obtenerUsuarios();

?>

<!DOCTYPE html>
<html>

<head>
	<title>Usuarios</title>
</head>

<body>
	<h1 align="center">
		Listado de Usuarios
	</h1>
	<?php include("includes/header.php"); ?>
	<a href="" title="">Agregar Nuevo</a>
	<a href="" title="">Modificar</a>
	<a href="" title="">Eliminar</a>
	 <form name="Usuarios">

	 	<table cellpadding="1" border="1" cellspacing="2" align="center">
			<tr>
				<th>Usuario</th>
				<th>Nombre</th>
				<th>Apelido</th>
				<th>Email</th>
			</tr>

		    <?php foreach($usuarios as $item):?> 
		    	<tr>
		    		<td><?php echo $item['usuario'];?></td>
		    		<td><?php echo $item['nombre']; ?></td>
		    		<td><?php echo $item['apellido'];?></td>
		    		<td><?php echo $item['email']; ?></td>
		    	</tr>	
		    <?php endforeach; ?>	

	</table>
	 </form>
	
</body>
</html>