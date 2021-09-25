<?php
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "lpineda";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
die("No hay conexion: " .mysqli_connect_error());
}
$sql = "insert into lpineda.luis(usuario,clave) values('".$usuario."','".($clave)."');";
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('usuario registrado con exito: $nombre, $correo'); window.location='sesion.php' </script>";
}
$conn->close();
?>

