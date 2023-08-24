<?php
function conectar(){
    $host="localhost";//nombre del host de mysql
    $user="root";//nombre del usuario de mysql
    $pass="";//password del usuario
    $db_name="distri";//nombre de la BD
    //conectarnos a la BD IMAGINARIA
    $link=mysqli_connect($host,$user,$pass) 
       or die ("ERROR al conectar la BD".mysqli_error($link));
    //Seleccionr la BD IMAGINARIA
    mysqli_select_db($link,$db_name) 
     or die ("ERROR al seleccionar la BD".mysqli_error($link));
     return $link;
}
?>






