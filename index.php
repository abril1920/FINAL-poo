<?php
include 'scripts/conexion.php';
$conexion = new Conexion();
$sql = "SELECT books.*, users.usu_name, genders.gen_gender FROM `books` INNER JOIN users ON users.usu_id = books.use_id INNER JOIN genders ON genders.gen_id = books.gen_id;";
$consulta = $conexion->prepare($sql);
$consulta->execute();
$books = $consulta->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-book - Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary justify-content-center fixed-top">
    <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">E-BOOK</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="scripts/auth/login.html">Iniciar Sesion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="scripts/auth/register.html">Registrarse</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pedir Libros</a>
    </li>
  </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-12 text-center">
      <h2>Conoce nuestro catalogo</h2>
    </div>
    <?php foreach ($books as $book) { ?>
      <div class="col-3">
        <div class="card text-white bg-primary">
        <img class="card-img-top" src="assets/img/a.jpg" alt="Title">
          <div class="card-body">
            <h4 class="card-title"><?php echo $book['boo_name'] ?></h4>
            <p class="card-text"><?php echo $book['gen_gender'] ?></p>
            <p class="card-text"><?php echo $book['usu_name'] ?></p>
            <form action="scripts/libros/mostrar.php" method="post">
              <input type="hidden" name="id" value="<?php echo $book['boo_id'] ?>">
              <input type="submit" value="Ver Detaller" class="btn btn-success">
            </form>
          </div>
        </div>
      </div>
      <?php } ?>
  </div>
</div>

</body>
</html>
