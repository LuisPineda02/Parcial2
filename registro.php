<!doctype html>
<html>
<head>

<title>Formulario de registro </title>
</head>
<body>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="complemento/styles.css">
<?php require 'partes/cabecera.php' ?>

<form action="guardar.php" method="POST">
<label for="usuario">correo electronico</label>
<input type="text" name="usuario" required/>
<label for="clave">Contraseña</label>
<input type="password" name="clave" required/>
<input name="enviar" type="submit" value="registrar"/>
</form>
<br>
<tr><td><a href="sesion.php" style="float:rigth">Login</a</td></tr>
</body>
</html>
