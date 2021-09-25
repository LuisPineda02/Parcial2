<?php
  unset($_SESSION["usuario"]);
  session_destroy();
  header("Location: sesion.php");
  exit;
?>
