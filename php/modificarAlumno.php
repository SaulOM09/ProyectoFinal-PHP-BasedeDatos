<?php
require_once "conexion.php";
$conexion=conexion();

$num=$_POST['num_control'];
$n=$_POST['nombre'];
$a=$_POST['apellido'];
$ca=$_POST['carrera'];
$co=$_POST['contrasena'];
$passHash = password_hash($co, PASSWORD_BCRYPT);

$sql="UPDATE alumnos SET nombre='$n', apellido='$a', carrera='$ca', contrasena='$passHash' WHERE num_control='$num'";
echo $result=mysqli_query($conexion,$sql);
?>
