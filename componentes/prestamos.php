<?php 
	session_start();
	include_once "../php/conexion.php";
	$conexion=conexion();
?>
<head>
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
</head>

<div class="row">
	<div class="col-sm-12">
		<h2 class="tituloT">Bitacora: Prestamos</h2>
		<div id="buscador"></div>
		<br>
		<table class="table table-hover table-condensed table-bordered" style="background-color:lightgrey;" >
			<tr class="tablasT">
				<td>Id</td>
				<td>Código Libro</td>
				<td>Nombre Libro</td>
				<td>N° Ctrl</td>
				<td>Nombre</td>
				<td>Fecha Prestamo</td>
				<td>Fecha Devolver</td>
				<td>Fecha Devuelto</td>
				<td>Editar Fecha</td>
			</tr>
		<?php 
			if (isset($_SESSION['consulta'])){
				if ($_SESSION['consulta'] > 0) {
					$id=$_SESSION['consulta'];
					$sql="SELECT prestamos.id, prestamos.codigo_libro, libros.nombre, prestamos.num_control, alumnos.nombre, prestamos.fecha_prestamo, prestamos.fecha_devolver, prestamos.fecha_devuelto FROM prestamos, alumnos WHERE prestamos.id='$id' AND alumnos.num_control=prestamos.num_control AND libros.codigo=prestamos.codigo_libro";
				}else{
					$sql="SELECT prestamos.id, prestamos.codigo_libro, libros.nombre, prestamos.num_control, alumnos.nombre, prestamos.fecha_prestamo, prestamos.fecha_devolver, prestamos.fecha_devuelto FROM prestamos, alumnos, libros WHERE alumnos.num_control=prestamos.num_control AND libros.codigo=prestamos.codigo_libro";
				}
			}else{
				$sql="SELECT prestamos.id, prestamos.codigo_libro, libros.nombre, prestamos.num_control, alumnos.nombre, prestamos.fecha_prestamo, prestamos.fecha_devolver, prestamos.fecha_devuelto FROM prestamos, alumnos, libros WHERE alumnos.num_control=prestamos.num_control AND libros.codigo=prestamos.codigo_libro";
			}

			$result=mysqli_query($conexion,$sql);
			while($ver=mysqli_fetch_row($result)){


				$datos=$ver[0]."||".
					   $ver[1]."||".
					   $ver[2]."||".
					   $ver[3]."||".
					   $ver[4]."||".
					   $ver[5]."||".
					   $ver[6]."||".
					   $ver[7];
		?>
		    <tr class="tablasC">
				<td><?php echo $ver[0]; ?></td>
				<td><?php echo $ver[1]; ?></td>
				<td><?php echo $ver[2]; ?></td>
				<td><?php echo $ver[3]; ?></td>
				<td><?php echo $ver[4]; ?></td>
                <td><?php echo $ver[5]; ?></td>
                <td><?php echo $ver[6]; ?></td>
                <td><?php echo $ver[7]; ?></td>
                <td><button class="btn btn-warning" data-toggle="modal" data-target="#modalActualizarPrestamo" onclick="formPrestamo('<?php echo $datos ?>')">Modificar <span class="glyphicon glyphicon-pencil"></span></button></td>
			</tr>
		<?php
		}
		?>	

		</table>
	</div>
</div>

</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#buscador').load('componentes/buscadorPrestamos.php');
	});
</script>