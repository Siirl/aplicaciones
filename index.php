<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
    <h1 align="center">ADMINISTRACION DE EMPLEADOS</h1><HR>

      <form method="post" action="insert.php">
       <table border="0" align="center">
       <tr>
    <th>CODIGO </th><td><input type="number" name="cod" value = '$row[id_c]' required></td>
    <th>NOMBRE</th><td><input type="text" name="nom" required></td>
    </tr>
    <tr>
    <th>EMAIL </th><td><input type="email" name="em" required></td>
    <th>TELEFONO </th><td><input type="number" name="tel" required></td>
       </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" value="REGISTRAR"></td>
      <td colspan="2" align="center"><input type="reset" value="LIMPIAR"></td>
     </tr>
       </table>
      </form><hr>

      <?php
include('conexion.inc.php');
$link=conectar();//traemos la funcion de coneccion
$sql="select * from tabla_imaginaria";
$res=mysqli_query($link,$sql) 
  or die("Error en la Consulta $sql".mysqli_error($link));
?>
<table border="0" align="center">
    <tr align="center">
    <th>CODIGO</th>
    <th>NOMBRE</th>
    <th>EMAIL</th>
    <th>TELEFONO</th>
    <th>ACCIONES</th>
     </tr>
<?php
while($row=mysqli_fetch_array($res)){
echo "<tr><td>".$row['id_c']."</td>
          <td>".$row['nomb_c']."</td>
          <td>".$row['email_c']."</td>
          <td>".$row['tel_c']."</td>
          <td>
          <a href='./mod.php?id=".$row['id_c']."'>
          <span class='material-icons'>edit_note</span></a>
          <a href='./elim.php?id=".$row['id_c']."'>
          <span class='material-icons'>delete_sweep</span></a>
          </td>
          </tr>";
}
?>
</table>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>