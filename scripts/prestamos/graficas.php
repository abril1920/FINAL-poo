<?php
include_once 'prestamos.php';

$cants =prestamos::graficas();
$cants2 =prestamos::graficas2();

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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
      <a class="nav-link" href="../libros/administradores.php">Libros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="graficas.php">Graficas</a>
    </li>
  </ul>
  </div>
</nav>
<div class="container mt-5">
<a href="../../index.php" class="btn btn-danger">Atras</a>
  <div class="container">
    <div class="row">
        <div class="col">
        <canvas id="myChart1" style="width:100%;"></canvas>
        <canvas id="myChart2" style="width:100%;"></canvas>
        </div>
    </div>
  </div>
</div>
<script>
var xValues = [<?php foreach ($cants as $cant) {echo "'".$cant["boo_name"]."',";}?>, ""];
var yValues = [<?php foreach ($cants as $cant) {echo "'".$cant["total_prestamos"]."',";}?>, 0];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart1", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "prestamos realizados"
    }
  }
});

var xValues = [<?php foreach ($cants2 as $cant2) {echo "'".$cant2["usu_name"]."',";}?>, ""];
var yValues = [<?php foreach ($cants2 as $cant2) {echo "'".$cant2["total_libros"]."',";}?>, 0];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart2", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "prestamos realizados"
    }
  }
});
</script>
</body>
</html>
