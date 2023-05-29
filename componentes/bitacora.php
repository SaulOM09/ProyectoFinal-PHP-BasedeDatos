<?php 
	session_start();
	include_once "../php/conexion.php";
	$conexion=conexion();
?>
<div class="row">
	<div class="col-sm-12">
		<h2 class="tituloT">Bitacora: Entradas y Salidas</h2>
		<div style="float: right;" id="contador"></div>
		<div id="buscador">
		</div>
		<br>
		<table class="table table-hover table-condensed table-bordered">
			<tr class="tablasT">
				<td>Id</td>
				<td>Fecha</td>
				<td>N° Ctrl</td>
				<td>Nombre(s)</td>
				<td>Carrera</td>
				<td>Hora Entrada</td>
				<td>Hora Salida</td>
			</tr>
		<?php 
			if (isset($_SESSION['consulta'])){
				if ($_SESSION['consulta'] > 0) {
					$id=$_SESSION['consulta'];
					$sql="SELECT bitacora.id, bitacora.fecha, bitacora.num_control, alumnos.nombre, alumnos.carrera, bitacora.hora_entrada, bitacora.hora_salida FROM bitacora, alumnos WHERE bitacora.id='$id' AND alumnos.num_control=bitacora.num_control ORDER by bitacora.fecha DESC";
				}else{
					$sql="SELECT bitacora.id, bitacora.fecha, bitacora.num_control, alumnos.nombre, alumnos.carrera, bitacora.hora_entrada, bitacora.hora_salida FROM bitacora, alumnos WHERE alumnos.num_control=bitacora.num_control ORDER by bitacora.fecha DESC";
				}
			}else{
				$sql="SELECT bitacora.id, bitacora.fecha, bitacora.num_control, alumnos.nombre, alumnos.carrera, bitacora.hora_entrada, bitacora.hora_salida FROM bitacora, alumnos WHERE alumnos.num_control=bitacora.num_control ORDER by bitacora.fecha DESC";
			}

			$result=mysqli_query($conexion,$sql);
			while($ver=mysqli_fetch_row($result)){


				$datos=$ver[0]."||".
					   $ver[1]."||".
					   $ver[2]."||".
					   $ver[3]."||".
					   $ver[4]."||".
					   $ver[5]."||".
					   $ver[6];
		?>
		    <tr class="tablasC">
				<td><?php echo $ver[0]; ?></td>
				<td><?php echo $ver[1]; ?></td>
				<td><?php echo $ver[2]; ?></td>
				<td><?php echo $ver[3]; ?></td>
				<td><?php echo $ver[4]; ?></td>
                <td><?php echo $ver[5]; ?></td>
                <td><?php echo $ver[6]; ?></td>
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
		$('#buscador').load('componentes/buscador.php');
		$('#contador').load('componentes/contador.php');
	});
</script>