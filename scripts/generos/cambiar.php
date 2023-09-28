<?php
include_once 'genero.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
genero::cambiar($id, $nombre);
header("Location: mostrar.php");

?>