function acceso(){

	var user=document.getElementById("usuario").value;
	var password=document.getElementById("passwd").value;
  document.getElementById("frm_login").action="php/acceso.php";
  if (user.length==0 || /^\s/.test(user)){
  	alert('Faltan datos');
  }else {
  document.getElementById("frm_login").submit();
}
}

function menujquery(opcion){
	$.ajax({
		type: "POST",
		url: "controller/controller.php",
		data: {opcion: opcion},
		beforeSend: function(){
			$("#home").html("<img src='images/loading.gif'>")
		},
		success: function(respuesta){
			$("#home").html(respuesta);
		}
	});
}


function agregaralumno(num_control,nombre,apellido,carrera,contrasena){

	$.ajax({
		type:"POST",
		url:"php/agregarAlumno.php",
		data:"num_control=" + num_control + "&nombre=" + nombbre + "&apellido=" + apellido + "&carrera=" + carrera + "&contrasena=" + contrasena,
		success:function(r){
			if (r==1) {
				$('#home').load('componentes/buscador.php');
				$('#home').load('componentes/administracion.php');
				alertify.success("Agregado con exito");
			}else{
				alertify.error("Error al insertar datos");
			}
		}
	});

}

function agregarlibro(nombrel,editoriall,autorl,generol,pais_autorl, paginasl, anol){

	$.ajax({
		type:"POST",
		url:"php/agregarLibro.php",
		data:"nombrel=" + nombrel + "&editoriall=" + editoriall + "&autorl=" + autorl + "&generol=" + generol + "&pais_autorl=" + pais_autorl + "&paginasl=" + paginasl + "&anol=" + anol,
		success:function(r){
			if (r==1) {
				alertify.success("Agregado con exito");
			}else{
				alertify.error("Error al insertar datos");
			}
		}
	});
}

function agregarPrestamo(codigo_librop,num_controlp,fecha_prestamop,fecha_devolverp){

	$.ajax({
		type:"POST",
		url:"php/agregarPrestamo.php",
		data:"codigo_librop=" + codigo_librop + "&num_controlp=" + num_controlp + "&fecha_prestamop=" + fecha_prestamop + "&fecha_devolverp=" + fecha_devolverp,
		success:function(r){
			if (r==1) {
				alertify.success("Agregado con exito");
			}else{
				alertify.error("Error al insertar datos");
			}
		}
	});
}

function formPrestamo(datos){

	d=datos.split('||');

	$('#idA').val(d[0]);
	$('#fecha_devolverA').val(d[6]);
	$('#fecha_devueltoA').val(d[7]);
	
}

function agregaForm(datos){

	d=datos.split('||');

	$('#num_controlM').val(d[0]);
	$('#nombreM').val(d[1]);
	$('#apellidoM').val(d[2]);
	$('#carreraM').val(d[3]);
	$('#contrasenaM').val(d[4]);
	
}

function actualizaDatos(){

	num_control=$('#num_controlM').val();
	nombre=$('#nombreM').val();
	apellido=$('#apellidoM').val();
	carrera=$('#carreraM').val();
	contrasena=$('#contrasenaM').val();
	
	cadena="num_control=" + num_control + "&nombre=" + nombre + "&apellido=" + apellido + "&carrera=" + carrera + "&contrasena=" + contrasena;

    $.ajax({
		type:"POST",
		url:"php/modificarAlumno.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#home').load('componentes/administracion.php');
				alertify.success("Actualizado con exito");
			}else{
				alertify.error("Error al insertar datos");
			}
		}
	});
}

function actualizarPrestamo(){

	id=$('#idA').val();
	fecha_devolver=$('#fecha_devolverA').val();
	fecha_devuelto=$('#fecha_devueltoA').val();
	
	cadena="id=" + id + "&fecha_devolver=" + fecha_devolver + "&fecha_devuelto=" + fecha_devuelto;

    $.ajax({
		type:"POST",
		url:"php/modificarPrestamo.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#home').load('componentes/prestamos.php');
				alertify.success("Actualizado con exito");
			}else{
				alertify.error("Error al insertar datos");
			}
		}
	});
}

function regentrada(num_control){

	$.ajax({
		type:"POST",
		url:"php/entrada.php",
		data:"num_control=" + num_control,
		success:function(r){
			if (r==1) {
				alertify.success("Entrada Registrada");
			}else{
				alertify.error("Error al insertar datos");
			}
		}
	});

}

function regsalida(num_control){

	$.ajax({
		type:"POST",
		url:"php/salida.php",
		data:"num_control=" + num_control,
		success:function(r){
			if (r==1) {
				alertify.success("Salida Registrada");
			}else{
				alertify.error("Error al insertar datos");
			}
		}
	});

}

function preguntaSiNo(num_control){
	alertify.confirm('Eliminar Registro', '¿Seguro desea eliminar el registro?', 
	function(){ eliminarDatos(num_control) }, 
	function(){ alertify.error('Cancelado')});
}

function eliminarDatos(num_control){

	cadena="num_control=" + num_control;
	$.ajax({
		type:"POST",
		url:"php/eliminarAlumno.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#home').load('componentes/administracion.php');
				alertify.success("Eliminado");
			}else{
				alertify.error("Eror: No se pudo eliminar");
			}
		}
	});
}

