<?php
include '../conexion.php';
class libros{
    public static function all() {
        $conexion = new Conexion();
        $sql = "SELECT books.*, users.usu_name, genders.gen_gender FROM `books` INNER JOIN users ON users.usu_id = books.use_id INNER JOIN genders ON genders.gen_id = books.gen_id;";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $books = $consulta->fetchAll();
        return $books;
    }

    public static function find($id) {
        $conexion = new Conexion();
        $sql = "SELECT books.*, users.usu_name, genders.gen_gender FROM `books` INNER JOIN users ON users.usu_id = books.use_id INNER JOIN genders ON genders.gen_id = books.gen_id WHERE books.boo_id=$id;";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $books = $consulta->fetchAll();
        return $books[0];
    }
}
?>