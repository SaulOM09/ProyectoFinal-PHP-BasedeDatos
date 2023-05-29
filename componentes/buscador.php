<?php 
	include_once "../php/conexion.php";
	$conexion=conexion();
	$sql="SELECT bitacora.id, bitacora.fecha, bitacora.num_control, alumnos.nombre, alumnos.carrera, bitacora.hora_entrada, bitacora.hora_salida FROM bitacora, alumnos WHERE alumnos.num_control=bitacora.num_control ORDER by bitacora.fecha";
	$result=mysqli_query($conexion,$sql);
?>
<div class="row">
	<div class="col-sm-12">
		<div>
		<h4 style="color: yellow;">Buscador</h4>
		<select id="Buscador" class="form-contol input-sm">
			<option value="0">Todos</option>
		<?php 
			while ($ver=mysqli_fetch_row($result)): {
			}
		?>

		<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[1]." - ".$ver[2]." - ".$ver[4] ?>
		</option>

		<?php 
			endwhile;
		?>
		</select>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#Buscador').select2();
		$('#Buscador').change(function(){
			$.ajax({
				type: "POST",
				data:'valor=' + $('#Buscador').val(),
				url:'php/crearsession.php',
				success:function(r){
					$('#home').load('componentes/bitacora.php');
				}	
			});
		});
	});
</script>