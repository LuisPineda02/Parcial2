<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "lpineda";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
die("No hay conexion: " .mysqli_connect_error());
}
$sql = "insert into lpineda.asistentes(nombre,apellido,correo) values('.$nombre.','.($apellido.)','.($correo.)')";
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('asistente registrado con exito: $nombre, $apellido'); window.location='index.php' </script>";
}
$conn->close();
?>