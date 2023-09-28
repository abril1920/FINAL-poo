<?php
include_once './genero.php';

$usu_name = $_POST['nombre'];

$genero = new genero($usu_name);

$genero->guardar();
header("location: ./mostrar.php");
?>