<?phpinclude ('./conexion.inc.php');
//llamar la funcion de conexion
$link=conectar();
//Traer los datos del formulario HTML
$cod=$_REQUEST['cod'];
$nom=$_REQUEST['nom'];
$apel=$_REQUEST['apel'];
$em=$_REQUEST['em'];
$tel=$_REQUEST['tel'];
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
//Insertar los datos en la Tabla
$sql="INSERT INTO alumnos (cod,nom,apel,em,tel,user,pass) VALUES ($cod,'$nom','$apel','$em','$tel','$user','$pass')";
$res=mysqli_query($link,$sql) or die ("Error: ".mysqli_error($link));
echo "<script type='text/javascript'>
    alert('Alumno Registrado Correctamente');
    window.location.href='index.php';
</script>";
?>