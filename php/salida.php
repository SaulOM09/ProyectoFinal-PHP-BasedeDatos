<?php
require_once "conexion.php";
$conexion=conexion();
$num_control=$_POST['num_control'];
date_default_timezone_set('America/Mexico_City');
$fecha=date("Y-m-d");
date_default_timezone_set('America/Mexico_City');
$hora=date("H:i:s");

$sql="UPDATE bitacora SET hora_salida='$hora' WHERE num_control='$num_control' AND fecha='$fecha' AND hora_salida IS NULL";
echo $result=mysqli_query($conexion,$sql);
?>