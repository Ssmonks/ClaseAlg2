<?php

/* $peliculas = ['batman', 'spiderman', 'matrix'];
var_dump($peliculas);
echo "<br><br>Cantidad de Peliculas " . count($peliculas) . "<br><br>";
echo '' . $peliculas[0] . ''; */

$notas = [$_POST["n1"], $_POST["n2"], $_POST["n3"]];
$total = 0;

for ($i = 0; $i < count($notas); $i++) {
    $total += $notas[$i];
}

$promedio = $total / count($notas);

echo "<h1> El promedio de notas es: " . number_format($promedio, 2) . "</h1>";
?>