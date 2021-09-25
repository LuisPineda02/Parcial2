<?php
$nombre = $_POST["nombre"];
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
$sql = "insert into lpineda.conferencia(nombre,correo) values('.$nombre.','.($correo.)')";
if ($conn->query($sql) === TRUE) {
    echo "<script> alert('conferencia guardada con exito: $nombre'); window.location='index.php' </script>";
}
$conn->close();
?>