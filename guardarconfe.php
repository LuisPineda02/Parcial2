<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$profesion = $_POST["profesion"];
$biografia = $_POST["biografia"];
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
$sql = "insert into lpineda.conferencistas(nombre,apellido,profesion,biografia,correo) values('.$nombre.','.($apellido).','.($profesion).','.($biografia).','.($correo.)')";
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('conferencista registrado con exito: $nombre, $apellido'); window.location='index.php' </script>";
}
$conn->close();
?>
