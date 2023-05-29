<?php
require_once "conexion.php";
$conexion=conexion();

$num_control=$_POST['num_control'];
date_default_timezone_set('America/Mexico_City');
$fecha=date("Y-m-d");
date_default_timezone_set('America/Mexico_City');
$hora=date("H:i:s");

$sql="INSERT INTO bitacora(num_control,fecha,hora_entrada) VALUES ('$num_control','$fecha','$hora')";
echo $result=mysqli_query($conexion,$sql);
?>