<?php
include '../generos/genero.php';

$generos = genero::mostrar();
$query = "SELECT * FROM users WHERE rols_id=2";
$conexion = new Conexion();
$conexion->prepare($query);
$consulta = $conexion->prepare($query);
$consulta->execute();
$users = $consulta->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-book - Inicio</title>
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
    <h2>Crecion de Genero</h2>
    <div class="card text-dark bg-light">
      <div class="card-body">
        <form action="procesar.php" method="POST">
            <div class="mb-3 mt-3">
              <label for="genero">Nombre:</label>
              <input type="text" class="form-control" id="genero" placeholder="Enter nombre" name="nombre">
            </div>
            <div class="mb-3 mt-3">
              <label for="genero">Genero:</label>
              <select class="form-select" name="genero">
                <?php foreach ($generos as $genero) { ?>
                <option value="<?php echo $genero['gen_id'] ?>"><?php echo $genero['gen_gender'] ?></option>
                <?php } ?>
            </select>
            </div>
            <div class="mb-3 mt-3">
              <label for="genero">Autor:</label>
              <select class="form-select" name="autor">
                <?php foreach ($users as $user) { ?>
                <option value="<?php echo $user['usu_id'] ?>"><?php echo $user['usu_name'] ?></option>
                <?php } ?>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
          </form>
      </div>
    </div>
  </div>

</body>
</html>
