<?php
require_once "conexion.php";
$conexion=conexion();

$id=$_POST['id'];
$devolver=$_POST['fecha_devolver'];
$devuelto=$_POST['fecha_devuelto'];

$sql="UPDATE prestamos SET fecha_devolver='$devolver', fecha_devuelto='$devuelto' WHERE id='$id'";
echo $result=mysqli_query($conexion,$sql);
?>
