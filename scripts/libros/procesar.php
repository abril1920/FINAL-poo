<?php
include_once './libros.php';

$nombre = $_POST['nombre'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];


$libro = libros::create($nombre,$autor,$genero);
if ($libro) {
header("location: ./todos.php");
}
?>