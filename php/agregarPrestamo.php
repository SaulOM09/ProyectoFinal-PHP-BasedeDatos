<?php
require_once "conexion.php";
$conexion=conexion();

$codigo_librop=$_POST['codigo_librop'];
$num_controlp=$_POST['num_controlp'];
$fecha_prestamop=$_POST['fecha_prestamop'];
$fecha_devolverp=$_POST['fecha_devolverp'];

$sql="INSERT INTO prestamos(codigo_libro,num_control,fecha_prestamo,fecha_devolver) VALUES ($codigo_librop,'$num_controlp','$fecha_prestamop','$fecha_devolverp')";
echo $result=mysqli_query($conexion,$sql);
?>