<?php
include '../conexion.php';
class prestamos{
    public static function all() {
        $conexion = new Conexion();
        $sql = "SELECT loans.*, books.boo_name, users.usu_name FROM `loans` INNER JOIN users ON users.usu_id = loans.use_id INNER JOIN books ON books.boo_id = loans.boo_id;";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $books = $consulta->fetchAll();
        return $books;
    }

    public static function find($id) {
        $conexion = new Conexion();
        $sql = "SELECT loans.*, books.boo_name, users.usu_name FROM `loans` INNER JOIN users ON users.usu_id = loans.use_id INNER JOIN books ON books.boo_id = loans.boo_id; WHERE books.loa_id=$id;";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $books = $consulta->fetchAll();
        return $books[0];
    }

    public function create($id, $end, $start, $id_user){
        $query = "INSERT INTO `loans`(`loa_start`, `loa_end`, `boo_id`, `use_id`) VALUES ('$start','$end','$id', '$id_user')";
        $conexion = new Conexion();
        $conexion->prepare($query);
        $consulta = $conexion->prepare($query);
        if ($consulta->execute()) {
            return true;
        }else{
            return false;
        }
    }
    
    public static function graficas() {
        $conexion = new Conexion();
        $sql = "SELECT COUNT(loans.loa_id) AS total_prestamos, loans.boo_id, books.boo_name FROM loans INNER JOIN books ON books.boo_id = loans.boo_id GROUP BY loans.boo_id, books.boo_name;";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $books = $consulta->fetchAll();
        return $books;
    }

    public static function graficas2() {
        $conexion = new Conexion();
        $sql = "SELECT COUNT(books.boo_id) AS total_libros, books.use_id, users.usu_name FROM books INNER JOIN users ON users.usu_id = books.use_id GROUP BY books.use_id, users.usu_name;";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $books = $consulta->fetchAll();
        return $books;
    }
}
?>