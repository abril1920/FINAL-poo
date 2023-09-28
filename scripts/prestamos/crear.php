<?php
$id = $_POST['id'];
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
    <h2>Crecion de prestamo</h2>
    <div class="card text-dark bg-light">
      <div class="card-body">
        <form action="procesar.php" method="POST">
            <div class="mb-3 mt-3">
              <label for="prestamo">Fecha entrega:</label>
              <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
              <input type="date" class="form-control" name="end">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
          </form>
      </div>
    </div>
  </div>

</body>
</html>