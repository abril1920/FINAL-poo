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
}
?>