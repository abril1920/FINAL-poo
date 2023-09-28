<?php
include_once 'genero.php';

$generos =genero::mostrar();

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
      <a class="nav-link" href="../prestamos/mostrar.php">Prestamos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Graficas</a>
    </li>
  </ul>
  </div>
</nav>
<div class="container mt-5">
<a href="../../index.php" class="btn btn-danger">Atras</a>
<a href="crear.html" class="btn btn-success">Crear genero</a>
  <table class="table">
    <thead>
      <tr>
        <th>Generos</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach ($generos as $genero) {
        ?>
      <tr>
        <td><?php echo $genero['gen_gender'] ?></td>
        <td><form action="editar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $genero['gen_id'] ?>">
            <input type="submit" value="Editar" class="btn btn-primary">
        </form></td>


        <td><form action="eliminar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $genero['gen_id'] ?>">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </form></td>
      </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
