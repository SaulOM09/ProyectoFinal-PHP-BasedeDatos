<head>
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
	<link rel="icon" href="images/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Bitacora Recepcion</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
	<link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
	<script src="librerias/select2/js/select2.js"></script>
</head>



<!-- **MODALS** -->
<!--Registrar Alumno -->
	<div class="modal fade" id="modalRegistrar" tabindex="-1" role="dialog" aira-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Registrar Alumno</h4>
				</div>
				<div class="modal-body">
					<label>Numero de Control</label>
					<input type="text" name="" id="num_control" class="form-control input-sm" required>
					<label>Nombres</label>
					<input type="text" name="" id="nombre" class="form-control input-sm" required>
					<label>Apellidos</label>
					<input type="text" name="" id="apellido" class="form-control input-sm" required>
					<label>Carrera</label>
						<select class="form-control custom-select mr-sm-2" id="carrera" required>
        					<option selected>Elige...</option>
        					<option value="LIA">Lic. en Informatica Administrativa</option>
        					<option value="LD">Lic. en Derecho</option>
        					<option value="LCI">Lic. en Comunicacion Intercultural</option>
        					<option value="LAP">Lic. en Administracion Publica Municipal</option>
        					<option value="IA">Ing. en Agronegocios</option>
      					</select><br>
					<label>Contraseña</label>
					<input type="password" name="" id="contrasena" class="form-control input-sm" required>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Guardar</button>
				</div>
			</div>
		</div>
	</div>

<!--Registrar Libro -->
	<div class="modal fade" id="modalRegistrarLibro" tabindex="-1" role="dialog" aira-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Registrar Libro</h4>
				</div>
				<div class="modal-body">
					<label>Nombre</label>
					<input type="text" name="" id="nombrel" class="form-control input-sm" required=true>
					<label>Editorial</label>
					<input type="text" name="" id="editoriall" class="form-control input-sm" required=true>
					<label>Autor</label>
					<input type="text" name="" id="autorl" class="form-control input-sm" required=true>
					<label>Genero</label>
					<input type="text" name="" id="generol" class="form-control input-sm" required=true>
					<label>Pais del Autor</label>
					<input type="text" name="" id="pais_autorl" class="form-control input-sm" required=true>
					<label>Páginas</label>
					<input type="text" name="" id="paginasl" class="form-control input-sm" required=true>
					<label>Año</label>
					<input type="text" name="" id="anol" class="form-control input-sm" required=true>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="relibro">Guardar Libro</button>
				</div>
			</div>
		</div>
	</div>

	<!--Registrar Prestamo -->
	<div class="modal fade" id="modalRegistrarPrestamo" tabindex="-1" role="dialog" aira-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Registrar Prestamo</h4>
				</div>
				<div class="modal-body">
					<label>Código del Libro</label>
					<input type="text" name="" id="codigo_librop" class="form-control input-sm" required=true>
					<label>Número de Control</label>
					<input type="text" name="" id="num_controlp" class="form-control input-sm" required=true>
					<label>Fecha Prestamo</label>
					<input type="date" name="" id="fecha_prestamop" class="form-control input-sm" required=true>
					<label>Fecha Devolver</label>
					<input type="date" name="" id="fecha_devolverp" class="form-control input-sm" required=true>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="represtamo">Guardar Prestamo</button>
				</div>
			</div>
		</div>
	</div>


<!--Insertar Hora de entrada -->
<div class="modal fade" id="modalEntrada" tabindex="-1" role="dialog" aira-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Registrar Entrada</h4>
				</div>
				<div class="modal-body">
					<label>Numero de Control</label>
					<input type="text" name="" id="num_controlE" class="form-control input-sm">
					<br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="regentrada">Entrar</button>
				</div>
			</div>
		</div>
	</div>

<!--Insertar Hora de Salida -->
<div class="modal fade" id="modalSalida" tabindex="-1" role="dialog" aira-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Registrar Salida</h4>
				</div>
				<div class="modal-body">
					<label>Numero de Control</label>
					<input type="text" name="" id="num_controlS" class="form-control input-sm">
					<br>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="regsalida">Salir</button>
				</div>
			</div>
		</div>
	</div>

	<!--Modificar Alumno -->
<div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aira-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Modificar Usuario</h4>
				</div>
				<div class="modal-body">
					<label>Numero de Control</label>
					<input type="text" name="" id="num_controlM" class="form-control input-sm">
					<label>Nombres</label>
					<input type="text" name="" id="nombreM" class="form-control input-sm">
					<label>Apellidos</label>
					<input type="text" name="" id="apellidoM" class="form-control input-sm">
					<label>Carrera</label>
					<input type="text" name="" id="carreraM" class="form-control input-sm">
					<label>Contraseña</label>
					<input type="password" name="" id="contrasenaM" class="form-control input-sm">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal" id="modificaruser">Actualizar</button>
				</div>
			</div>
		</div>
	</div>

	<!--Modificar Fecha Prestamo -->
<div class="modal fade" id="modalActualizarPrestamo" tabindex="-1" role="dialog" aira-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">Moficicar Fecha del Prestamo</h4>
				</div>
				<div class="modal-body">
					<label>ID Prestamo</label>
					<input type="text" name="" id="idA" class="form-control input-sm" readonly > <!-- type="hidden"-->
					<label>Fechar Devolver</label>
					<input type="date" name="" id="fecha_devolverA" class="form-control input-sm">
					<label>Fecha Devuelto</label>
					<input type="date" name="" id="fecha_devueltoA" class="form-control input-sm">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal" id="modificarPrestamo">Actualizar</button>
				</div>
			</div>
		</div>
	</div>


<!-- **FUNCIONES** -->


<!--Insertar Libro -->
<script type="text/javascript">
$(function () {
    $("#relibro").click(function () {
    	nombrel=$('#nombrel').val();
		editoriall=$('#editoriall').val();
		autorl=$('#autorl').val();
		generol=$('#generol').val();
		pais_autorl=$('#pais_autorl').val();
		paginasl=$('#paginasl').val();
		anol=$('#anol').val();
			agregarlibro(nombrel,editoriall,autorl,generol,pais_autorl,paginasl,anol);
    });
});
</script>

<!--Modificar Prestamo -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#modificarPrestamo').click(function(){
			actualizarPrestamo();
		});
	});
</script>

<!--Insertar Prestamo -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#represtamo').click(function(){
		codigo_librop=$('#codigo_librop').val();
		num_controlp=$('#num_controlp').val();
		fecha_prestamop=$('#fecha_prestamop').val();
		fecha_devolverp=$('#fecha_devolverp').val();
			agregarPrestamo(codigo_librop,num_controlp,fecha_prestamop,fecha_devolverp);
		});
	});
</script>

<!--Insertar Alumno -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#guardarnuevo').click(function(){
		num_control=$('#num_control').val();
		nombbre=$('#nombre').val();
		apellido=$('#apellido').val();
		carrera=$('#carrera').val();
		contrasena=$('#contrasena').val();
			agregaralumno(num_control,nombre,apellido,carrera,contrasena);
		});

		$('#modificaruser').click(function(){
		actualizaDatos();
		});
	});
</script>

<!--Insertar Hora de Entrada -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#regentrada').click(function(){
		num_control=$('#num_controlE').val();
			regentrada(num_control);
		});
	});
</script>

<!--Insertar Hora de Salida -->
<script type="text/javascript">
	$(document).ready(function(){
		$('#regsalida').click(function(){
		num_control=$('#num_controlS').val();
			regsalida(num_control);
		});
	});
</script>