<?php
include 'user.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$user = user::register($name, $email, $password);
if ($user) {
    echo "registro exitoso<br>";
    echo "<a href='login.html'>Iniciar Sesion</a>";
}
?>