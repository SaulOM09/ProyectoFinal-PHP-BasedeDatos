<?php
require_once "conexion.php";
$conexion=conexion();

$nombrel=$_POST['nombrel'];
$editoriall=$_POST['editoriall'];
$autorl=$_POST['autorl'];
$generol=$_POST['generol'];
$pais_autorl=$_POST['pais_autorl'];
$paginasl=$_POST['paginasl'];
$anol=$_POST['anol'];

$sql="INSERT INTO libros(nombre,editorial,autor,genero,pais_autor,paginas,ano) VALUES ('$nombrel','$editoriall','$autorl','$generol','$pais_autorl',$paginasl,$anol)";
echo $result=mysqli_query($conexion,$sql);
?>