<?php
session_start();
unset($_SESSION['consulta']);
include_once 'componentes/header.php';
if (isset($_SESSION['mvc_conectado']) && $_SESSION ['mvc_conectado']==1) {
 include_once 'componentes/home.php';
} else if (isset($_SESSION['mvc_conectado']) && $_SESSION ['mvc_conectado']==3) {
 include_once 'general/home.php';
} else {
  include_once 'componentes/login.php';
}

 ?>