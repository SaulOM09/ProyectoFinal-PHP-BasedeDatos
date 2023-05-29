<?php
$opcion =$_POST['opcion'];
//echo "opcion seleccionada...".$opcion;
switch ($opcion){
	case 1:
	header('Location:../componentes/entradas-salidas.php');
	break;

	case 2:
	header('Location:../componentes/bitacora.php');
	break;

	case 3:
	header('Location:../componentes/administracion.php');
	break;

	case 4:
	header('Location:../componentes/prestamos.php');
	break;

	default:
	echo 'Error, contacta al administrador';
	break;
}

?>