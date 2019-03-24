<?php
$mysqli = new mysqli('localhost','root','c4rp1nt3r0','personas');

if($mysqli->connect_error){

    die('Error en la conexion'.$mysqli->connect_error);
}


?>
