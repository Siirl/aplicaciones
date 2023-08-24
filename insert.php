<?php
include('./conexion.inc.php');
$link=conectar();
$cod=$_REQUEST['cod'];
$name=$_REQUEST['nom'];
$em=$_REQUEST['em'];
$tel=$_REQUEST['tel'];
$sql="insert into tabla_imaginaria values('$cod','$name','$em','$tel')";
$res=mysqli_query($link,$sql) 
    or die("ERROR EN LA CONSULTA $sql".mysqli_error($link));
    echo "<script>
    alert('Empleado Registrado');
    window.location='./prin.php';
    </script>";
?>