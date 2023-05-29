<?php
require_once "conexion.php";
$conexion=conexion();

$num_control=$_POST['num_control'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$carrera=$_POST['carrera'];
$contrasena=$_POST['contrasena'];
$passHash = password_hash($contrasena, PASSWORD_BCRYPT);

$sql="INSERT INTO alumnos(num_control,nombre,apellido,carrera,contrasena) VALUES ('$num_control','$nombre','$apellido','$carrera','$passHash')";
echo $result=mysqli_query($conexion,$sql);
?>