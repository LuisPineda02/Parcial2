<!doctype html>
<html>
<head>

<title>Registro de conferencistasa </title>
</head>
<body>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="complemento/styles.css">
<?php require 'partes/cabeceraasistente.php' ?>

<form action="guardarasistente.php" method="POST">

<label for="nombre">nombre</label>
<input type="text" name="nombre" required/>

<label for="apellido">apellido</label>
<input type="text" name="apellido" required/>

<label for="correo">Correo electronico</label>
<input type="text" name="correo" required/>


<input name="enviar" type="submit" value="registrar"/>
<br>
<tr><td><a href="index.php" style="float:rigth">Regresar a menu</a></td></tr>
</form>
</body>
</html>
