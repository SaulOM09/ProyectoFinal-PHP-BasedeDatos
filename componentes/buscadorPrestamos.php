<?php 
	include_once "../php/conexion.php";
	$conexion=conexion();
	$sql="SELECT prestamos.id, prestamos.codigo_libro, libros.nombre, prestamos.num_control, alumnos.nombre, prestamos.fecha_prestamo, prestamos.fecha_devolver, prestamos.fecha_devuelto FROM prestamos, alumnos, libros WHERE alumnos.num_control=prestamos.num_control AND libros.codigo=prestamos.codigo_libro";
	$result=mysqli_query($conexion,$sql);
?>
<div class="row">
	<div class="col-sm-12">
		<div>
		<h4 style="color: yellow;">Buscador</h4>
		<select id="BuscadorPrestamos" class="form-contol input-sm">
			<option value="0">Todos</option>
		<?php 
			while ($ver=mysqli_fetch_row($result)): {
			}
		?>

		<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[0]." - ".$ver[2]." - ".$ver[3] ?>
		</option>

		<?php 
			endwhile;
		?>
		</select>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#BuscadorPrestamos').select2();
		$('#BuscadorPrestamos').change(function(){
			$.ajax({
				type: "POST",
				data:'valor=' + $('#BuscadorPrestamos').val(),
				url:'php/crearsession.php',
				success:function(r){
					$('#home').load('componentes/prestamos.php');
				}	
			});
		});
	});
</script>