<?php
include_once './prestamos.php';

$id = $_POST['id'];
$end = $_POST['end'];
$start = date("Y-m-d ");
session_start();
$id_user =$_SESSION['id'];
$prestamo = prestamos::create($id, $end, $start, $id_user);
if ($prestamo) {
    header("location: ../libros/todos.php");
}
?>