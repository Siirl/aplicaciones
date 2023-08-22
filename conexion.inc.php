<?php
function conectar(){
$host="localhost";
$user="root";
$pass="";
$dbname="distri";
//conectarnos a la BD
$link=mysqli_connect($host,$user,$pass) or die ("ERROR AL CONECTAR LA BD" .mysqli_error($link));
//seleccionar la BD
mysqli_select_db($link,"dbname") or die ("ERROR AL SELECCIONAR LA BD".mysqli_error($link));
return $link

}
?>