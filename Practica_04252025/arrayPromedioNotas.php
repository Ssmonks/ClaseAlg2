<?php

$cantNotas = $_POST['btn1'];
$notas = [];
$total = 0;

for ($i = 1; $i <= $cantNotas; $i++) {
    $notas[$i] = $_POST['nota' . $i];
}

for ($i = 1; $i <= $cantNotas; $i++) {
    $total += $notas[$i];
}

$promedio = $total / $cantNotas;

echo "<h1> El promedio de notas es: " . number_format($promedio, 2) . "</h1>";
include "pie.php";
