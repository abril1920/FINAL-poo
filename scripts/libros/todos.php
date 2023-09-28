<?php
include_once 'libros.php';

$libros =libros::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary justify-content-center fixed-top">
    <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">E-BOOK</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="scripts/generos/mostrar.php">Generos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Pedir Libros</a>
    </li>
  </ul>
  </div>
</nav>
<div class="container mt-5">
<a href="../../index.php" class="btn btn-danger">Atras</a>
<?php foreach ($libros as $libro) { ?>
<div class="row mt-5">
<div class="col-3">
    <img src="../../assets/img/a.jpg" alt="">
</div>
<div class="col-9">
<ul class="list-group">
  <li class="list-group-item"><b>Nombre: </b><?php echo $libro['boo_name'] ?></li>
  <li class="list-group-item"><b>Autor: </b><?php echo $libro['usu_name'] ?></li>
  <li class="list-group-item"><b>Genero: </b><?php echo $libro['gen_gender'] ?></li>
  <li class="list-group-item"><form action="../prestamos/crear.php" method="post">
    <input type="hidden" name="id" value="<?php echo $libro['boo_id'] ?>">
    <input type="submit" value="Pedir prestado" class="btn btn-success">
  </form></li>
</ul>
</div>
</div>
<?php } ?>
</div>

</body>
</html>
