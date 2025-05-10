<?php
include 'cone_r.php';
$sql = 'SELECT * FROM trabajadores';
$longitud_clave = 4; // Ajusta la longitud de las claves a probar
$caracteres_posibles = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'); // Caracteres posibles para la clave
$encontrado = false; // Bandera para indicar si se encontró la clave
$iteraciones = 0; // Contador de iteraciones
$clave_encontrada = 'No encontrado'; // Inicializa la variable para la clave encontrada

$query = $connect->prepare($sql);
$query->execute();

$results = $query->fetchAll(PDO::FETCH_OBJ);

function generar_combinaciones_alfanumericas($longitud, $caracteres, $actual = '')
{
    if (strlen($actual) == $longitud) {
        yield $actual; // Devuelve la combinación actual
    } else {
        foreach ($caracteres as $caracter) {
            yield from generar_combinaciones_alfanumericas($longitud, $caracteres, $actual . $caracter); // Llama recursivamente para generar combinaciones más largas
        }
    }
}

if ($query->rowCount() > 0) {

    echo '<hr><br>
    <table style=" table-layout: auto;
    /* width: 35%; */
    border-collapse: collapse;
    border: 3px solid purple;">
    <tr>
        <th style="border: 3px solid purple; width:300px;">Nombre</th>
        <th style="border: 3px solid purple; width:300px;">Password</th>
        <th style="border: 3px solid purple; width:300px;">Fecha de Registro del Usuario</th>
  </tr>';

    foreach ($results as $result) {
        // Reinicia la bandera y el contador para cada usuario
        foreach (generar_combinaciones_alfanumericas($longitud_clave, $caracteres_posibles) as $posible_clave) {
            $iteraciones++; // Incrementa el contador de iteraciones
            if (md5($posible_clave) === $result->password) { // Compara la clave generada con la almacenada
                $clave_encontrada = $posible_clave; // Guarda la clave encontrada
                $encontrado = true; // Marca como encontrado
                break; // Sale del bucle si se encuentra la clave
            }
        }

        /*         echo "<br>" . $iteraciones . " iteraciones<br>";
        echo "<br>" . $clave_encontrada . " clave_encontrada<br>"; */

        echo '
    <tr style="border: 3px solid purple;">
        <td style="padding: 15px; border: 3px solid purple; text-align: center;">' . $result->nombre . '</td>
        <td style="padding: 15px; border: 3px solid purple; text-align: center;">' . $clave_encontrada . '</td>
        <td style="padding: 15px; border: 3px solid purple; text-align: center;">' . $result->fechaRegistro  . '</td> 
    </tr>';
    }

    echo "</table>";
}
