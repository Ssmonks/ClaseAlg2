<?php
$operation = $_POST["operation"];
$n1 = $_POST["number1"];
$n2 = $_POST["number2"];

function suma($n1, $n2)
{
    return $n1 + $n2;
}
function resta($n1, $n2)
{
    return $n1 - $n2;
}
function multipliacion($n1, $n2)
{
    return $n1 * $n2;
}
function division($n1, $n2)
{
    return $n1 / $n2;
}
function parImpar($n1)
{
    if ($n1 % 2 === 0) {
        echo "<h1>" . $n1 . " es Par." . "</h1>";
    } else {
        echo "<h1>" . $n1 . " es Impar." . "</h1>";
    }
}
function factorial($n1)
{
    $total = 1;
    for ($i = 1; $i <= $n1; $i++) {
        $total = $total * $i;
    }
    echo "<h1>El factorial de " . $n1 . " es " . $total . "</h1>";
}
function fibo($n1)
{
    $total = 0;
    $totalAnt = 1;
    for ($i = 0; $i < $n1; $i++) {
        $total =  $total + $totalAnt;
        $totalAnt = $total - $totalAnt;
    }
    echo "<h1>La serie Fibonnachi hasta " . $n1 . " es " . $total . "</h1>";
}
function bisiesto($n1)
{
    if ($n1 % 4 === 0) {
        if ($n1 % 100 === 0 && $n1 % 400 === 0) {
            echo "<h1>El año " . $n1 . " es Bisiesto" . "</h1>";
        } else {
            echo "<h1>El año " . $n1 . " no es Bisiesto" . "</h1>";
        }
    } else {
        echo "<h1>El año " . $n1 . " no es Bisiesto" . "</h1>";
    }
}

function primo($n1)
{
    $cont = 0;
    for ($i = 1; $i <= $n1; $i++) {
        if ($n1 % $i == 0) {
            $cont++;
        }
    }

    if ($cont === 2) {
        echo "<h1>El número " . $n1 . " es primo." . "</h1>";
    } else {
        echo "<h1>El número " . $n1 . " no es primo." . "</h1>";
    }
}

function potencias($n1, $exponente)
{
    $total = 1;
    for ($i = 1; $i <= $exponente; $i++) {
        $total =  $total * $n1;
    }
    return $total;
}

switch ($operation) {
    case 'suma':
        echo "<h1>El resultado de la suma es: " . suma($n1, $n2) . "</h1>";
        break;
    case 'resta':
        echo "<h1>El resultado de la resta es: " . resta($n1, $n2) . "</h1>";
        break;
    case 'mult':
        echo "<h1>El resultado de la múltiplicación es: " . multipliacion($n1, $n2) . "</h1>";
        break;
    case 'div':
        if ($n2 === 0) {
            echo "<h1>No se puede dividir entre '0'" . "</h1>";
        } else {
            echo "<h1>El resultado de la División es: " . division($n1, $n2) . "</h1>";
        }
        break;
    case 'par/impar':
        parImpar($n1);
        break;
    case 'fact':
        factorial($n1);
        break;
    case 'fibo':
        fibo($n1);
        break;
    case 'bis':
        bisiesto($n1);
        break;
    case 'primo':
        primo($n1);
        break;
    case 'cubo':
        $total = potencias($n1, 3);
        echo "<h1>El cubo del número " . $n1 . " es " . $total . "</h1>";
        break;
    case 'cuadrado':
        $total = potencias($n1, 2);
        echo "<h1>El cuadrado del número " . $n1 . " es " . $total . "</h1>";
        break;
}
