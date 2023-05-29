<?php
require_once "conexion.php";
$conexion=conexion();

$num=$_POST['num_control'];

$sql="DELETE FROM alumnos WHERE num_control='$num'";
echo $result=mysqli_query($conexion,$sql);
?>