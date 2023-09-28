<?php
include 'user.php';
$email = $_POST['email'];
$password = $_POST['password'];

$user = user::login($email, $password);
if (!$user == null) {
    session_start();
    $_SESSION['id'] = $user['usu_id'];
    if ($user['rols_id'] ==1) {;
        header("Location:../generos/mostrar.php");
    }else{
        header("Location:../libros/todos.php");
    }
}else{
    echo "Credenciales incorrectas";
}
?>