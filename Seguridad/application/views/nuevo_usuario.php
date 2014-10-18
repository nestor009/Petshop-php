<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div align="center">
		<h1>Nuevo Usuario</h1>

		<table>
			
		 	<tr>
		 		<td> <?php echo form_label('Usuario','usuario'); ?>  </td>
		 		<td> <?php echo form_input('usuario');?></td>
		 	</tr>

		 	<tr>
		 		<td> <?php echo form_label('Nombre','nombre'); ?>  </td>
		 		<td> <?php echo form_input('nombre'); ?></td>
		 	</tr>

		 	<tr>
		 		<td> <?php echo form_label('Apellido','apellido'); ?>  </td>
		 		<td> <?php echo form_input('apellido'); ?></td>
		 	</tr>

		 	<tr>
		 		<td> <?php echo form_label('Email','email'); ?>  </td>
		 		<td> <?php echo form_input('email'); ?></td>
		 	</tr>

		 	<tr>
		 		<td> <?php echo form_submit('botonSubmit','Enviar'); ?>  </td>
		 		<td> </td>
		 	</tr>

		</table>
		
		<?php	echo form_close();?>


	</div>
	
</body>
</html>