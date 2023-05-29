<?php 
	include_once "../php/conexion.php";
	$conexion=conexion();
?>
<div>
<div><h5 style="color: yellow;">Alumnos dentro del laboratorio</h5></div>
<table class="table table-hover table-condensed table-bordered">
			<tr class="tablasT">
				<td>LIA</td>
				<td>LD</td>
				<td>LCI</td>
				<td>LAP</td>
				<td>IA</td>
				<td>TOTAL</td>
			</tr>

		    <tr class="tablasC">
				<td>
				<?php
				date_default_timezone_set('America/Mexico_City');
				$fecha=date("Y-m-d"); 
				$sql="SELECT count(alumnos.carrera) FROM bitacora, alumnos WHERE alumnos.num_control=bitacora.num_control AND alumnos.carrera='ISC' AND bitacora.fecha='$fecha' AND bitacora.hora_salida IS NULL";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0];
				
				echo $ver[0]; ?>
				<?php
				}
				?>	
				</td>
				<td>
				<?php
				date_default_timezone_set('America/Mexico_City');
				$fecha=date("Y-m-d"); 
				$sql="SELECT count(alumnos.carrera) FROM bitacora, alumnos WHERE alumnos.num_control=bitacora.num_control AND alumnos.carrera='IIA' AND bitacora.fecha='$fecha' AND bitacora.hora_salida IS NULL";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0];
				
				echo $ver[0]; ?>
				<?php
				}
				?>	
				</td>
				<td>
				<?php
				date_default_timezone_set('America/Mexico_City');
				$fecha=date("Y-m-d"); 
				$sql="SELECT count(alumnos.carrera) FROM bitacora, alumnos WHERE alumnos.num_control=bitacora.num_control AND alumnos.carrera='II' AND bitacora.fecha='$fecha' AND bitacora.hora_salida IS NULL";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0];
				
				echo $ver[0]; ?>
				<?php
				}
				?>		
				</td>
				<td>
				<?php
				date_default_timezone_set('America/Mexico_City');
				$fecha=date("Y-m-d"); 
				$sql="SELECT count(alumnos.carrera) FROM bitacora, alumnos WHERE alumnos.num_control=bitacora.num_control AND alumnos.carrera='IAMB' AND bitacora.fecha='$fecha' AND bitacora.hora_salida IS NULL";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0];
				
				echo $ver[0]; ?>
				<?php
				}
				?>	
				</td>

				<td>
				<?php
				date_default_timezone_set('America/Mexico_City');
				$fecha=date("Y-m-d"); 
				$sql="SELECT count(alumnos.carrera) FROM bitacora, alumnos WHERE alumnos.num_control=bitacora.num_control AND alumnos.carrera='IGE' AND bitacora.fecha='$fecha' AND bitacora.hora_salida IS NULL";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0];
				
				echo $ver[0]; ?>
				<?php
				}
				?>		
				</td>
				<td>
				<?php
				date_default_timezone_set('America/Mexico_City');
				$fecha=date("Y-m-d"); 
				$sql="SELECT count(alumnos.carrera) FROM bitacora, alumnos WHERE alumnos.num_control=bitacora.num_control AND bitacora.fecha='$fecha' AND bitacora.hora_salida IS NULL";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0];
				
				echo $ver[0]; ?>	
				</td>
			</tr>
		<?php
		}
		?>	

		</table> 
</div>