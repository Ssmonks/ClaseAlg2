<?php
$cantNotas = $_POST["cantNotas"];

echo '<fieldset> <legend>Introduzca las notas</legend>
        <form action="./arrayPromedioNotas.php" method="POST">';

for ($i = 1; $i <= $cantNotas; $i++) {
        echo '<label for="' . 'nota' . $i . '">Escriba la nota nro. ' . $i . '</label><br /><input type="number" max="20" name="' . 'nota' . $i . '" required /><br />';
}

echo '<br /><button type="submit" name="btn1" value="' . $cantNotas . '"/>Enviar</button> <button type="reset">Limpiar</button></form></fieldset>';
include "pie.php";
