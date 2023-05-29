<?php 
	include_once "../php/conexion.php";
	$conexion=conexion();
?>
<div class="row">
	<div class="col-sm-12">
		<h2 class="tituloT">Administracion de Usuarios</h2>
		<div>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalRegistrar">Agregar <span class="glyphicon glyphicon-plus"></span></button>
		</div>
		<br>
		<table class="table table-hover table-condensed table-bordered">
			<tr class="tablasT">
				<td>Num Control</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Carrera</td>
				<td></td>
				<td></td>
			</tr>
		<?php 
			$sql="SELECT num_control, nombre, apellido, carrera, contrasena FROM alumnos ORDER by num_control";
			$result=mysqli_query($conexion,$sql);
			while($ver=mysqli_fetch_row($result)){

				$datos=$ver[0]."||".
					   $ver[1]."||".
					   $ver[2]."||".
					   $ver[3]."||".
					   $ver[4];
		?>
		    <tr class="tablasC">
				<td><?php echo $ver[0]; ?> </td>
				<td><?php echo $ver[1]; ?></td>
				<td><?php echo $ver[2]; ?></td>
				<td><?php echo $ver[3]; ?></td>
                <td><button class="btn btn-warning" data-toggle="modal" data-target="#modalActualizar" onclick="agregaForm('<?php echo $datos ?>')">Modificar <span class="glyphicon glyphicon-pencil"></span></button></td>
				<td><button class="btn btn-danger" onclick="preguntaSiNo('<?php echo $ver[0] ?>')">Eliminar <span class="glyphicon glyphicon-trash"></span></button></td>
			</tr>
		<?php
		}
		?>	

		</table> 
	</div>

</div>