<?php
include_once 'genero.php';

$id = $_POST['id'];

genero::eliminar($id);

header("Location: mostrar.php");

?>