<?php

if(isset($_POST["usuario"]) && isset($_POST["clave"])){
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

	if (!$conn) {
    		die("Fallo conectarse por: " . mysqli_connect_error());
	}

	$sql = "SELECT usuario,clave FROM lpineda.luis where usuario = '".$usuario."' and clave = '".($clave)."';";


	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		session_start();
		$_SESSION["usuario"]=$usuario;
		if ($result) {
		}
	}else{
		echo "No se logro iniciar sesion";
	}
	$conn->close();
} 
?>
<!doctype html>
<html>
<head>
<title>Formulario de registro </title>
</head>
<body>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="complemento/styles.css">
<?php require 'partes/cabecera2.php' ?>
<?php
if(isset($_SESSION["usuario"])){
	header('location: index.php');
?>

</form>

<?php
}
else{
?>
<form action="sesion.php" method="POST">
<label for="usuario">correo electronico</label>
<input type="text" name="usuario" required/>
<label for="clave">contraseña</label>
<input type="password" name="clave" required/>
<input name="enviar" type="submit" value="Iniciar"/>
</form>
<tr><td><a href="registro.php" style="float:rigth">Registrate</a></td></tr>

<?php
}
?>
</body>
</html>

