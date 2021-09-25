<!doctype html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="complemento/styles.css">
<title>Consulta de usuarios </title>
</head>
<body>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "lpineda";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {
	die("No hay conexion: " .mysqli_connect_error());
}
$sql = "SELECT usuario,clave FROM lpineda.luis;";

$result = $conn->query($sql);
echo "<table>";
echo "<tr><th>usuario</th><<th>Clave</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>><td>" . $row["usuario"]. "</td><td>" . $row["clave"]. "</td></tr>";
    }
} else {
   echo "0 registros";
}
echo "</table>";


?>
</body>
<br>
<tr><td><a href="index.php" style="float:rigth">Regresar a menu</a></td></tr>
</html>

