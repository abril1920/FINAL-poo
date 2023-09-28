<?php
include '../conexion.php';
class user{
    public static function login($email, $password){
        $query = "SELECT * FROM users WHERE usu_email='$email' AND usu_password='$password'";
        echo $query;
        $conexion = new Conexion();
        $conexion->prepare($query);
        $consulta = $conexion->prepare($query);
        $consulta->execute();
        $user = $consulta->fetchAll();
        return $user[0];
    }

    public static function register($name, $email, $password){
        $query = "INSERT INTO `users`(`usu_name`, `usu_email`, `usu_password`, `rols_id`) VALUES ('$name','$email','$password','3')";
        $conexion = new Conexion();
        $conexion->prepare($query);
        $consulta = $conexion->prepare($query);
        if ($consulta->execute()) {
            return true;
        }else{
            return false;
        }
    }
}
?>