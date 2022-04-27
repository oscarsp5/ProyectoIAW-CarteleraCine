<?php 

$muestraCookies = true;

if($_COOKIE['aceptaPolitica'] == 'yes') {
  $muestraCookies = false;
}

if($_GET['aceptado'] == 1){
  // Establecer la cookieParaLa siguiente visita
  setcookie('aceptaPolitica','yes');
  $muestraCookies = false;
}

?>