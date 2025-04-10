<?php

$cantidad_notas = $_POST['notas'];
$suma = 0;

for ($i = 1; $i <= $cantidad_notas; $i++) {
    $suma += $_POST['nota' . $i];
}

$promedio = $suma / $cantidad_notas;


echo '<h1>Su Promedio es ' . $promedio . '<br></h1>';

for ($i = 1; $i <= $cantidad_notas; $i++) {
    $val = $_POST['nota' . $i];
    if ($val > $promedio) {
        echo '<mark style="background-color: yellow">' . $val . '</mark> Es mayor al promedio  <br>';
    } else if ($val < $promedio) {
        echo '<mark style="background-color: red">' . $val . '</mark> Es menor al promedio <br>';
    }
}
