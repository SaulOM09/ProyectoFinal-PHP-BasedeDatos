<?php
session_start();
require_once 'conexion.php';
$conexion=conexion();

$usuario =$_POST['usuario'];
$pass =$_POST['passwd'];

$sql = "SELECT * FROM usuarios WHERE id_usuario = '$usuario'";
$result=mysqli_query($conexion,$sql);

if ($result->num_rows > 0) {     }

$row = $result->fetch_array(MYSQLI_ASSOC);

if ( $pass==$row['contrasena'] AND $row['rol']==100) {
  $_SESSION['mvc_conectado'] =1;
}else if ( $pass==$row['contrasena'] AND $row['rol']==200) {
  $_SESSION['mvc_conectado'] =3;
  header("Location: ../index2.html");
} else {
  $_SESSION['mvc_conectado'] =2;
}

header("Location: ../index.php");

 ?>
