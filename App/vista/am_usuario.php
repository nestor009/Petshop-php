
<?php include('includes/header.php'); ?>
	<h3>Agregar Nuevo Usuario</h3>
	<article>
		<form method = "POST" action="../controlador/handler.php">
			Usuario:<input type ="text" name ="txtUsuario"> <br>
			Nombre:<input type ="text" name ="txtNombre"> <br>
			Apellido:<input type ="text" name ="txtApellido"> <br>
			Estado:<input type ="checkbox" name ="chkEstado" value ="Estado"> <br>
			Email:<input type ="text" name ="txtEmail"> <br>
			Grupo:  <select name="cmbGrupo">
			<option value="Adm">Administrador</option>
			<option value="Moderador">Moderador</option>
			<option value="Diammond">Diammond</option>
			<option value="NFU">NFU</option>
			</select> <br>
			<input type = "submit" value ="Agregar">
		</form>
	</article>
</body>
</html>