<?php 
	include_once "../php/conexion.php";
	$conexion=conexion();
?>
<div class="row">
	<div class="col-sm-12">
		<h2 class="tituloT">Administracion de Usuarios</h2>
		<div>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalRegistrar">Agregar <span class="glyphicon glyphicon-plus"></span></button>
			<button class="btn btn-danger" data-target="#modalEliminar">Eliminar <span class="glyphicon glyphicon-trash"></span></button>
		</div>
		<table class="table table-hover table-condensed table-bordered">
			<tr class="tablasT">
				<td>Num Control</td>
				<td>Nombre</td>
				<td>Apellidos</td>
				<td>Carrera</td>
			</tr>
		<?php 
			$sql="SELECT num_control, nombre, apellido, carrera FROM alumnos";
			$result=mysqli_query($conexion,$sql);
			while($ver=mysqli_fetch_row($result)){
		?>
		    <tr class="tablasC">
				<td><?php echo $ver[0]; ?> </td>
				<td><?php echo $ver[1]; ?></td>
				<td><?php echo $ver[2]; ?></td>
				<td><?php echo $ver[3]; ?></td>
			</tr>
		<?php
		}
		?>	

		</table> 
	</div>

</div>