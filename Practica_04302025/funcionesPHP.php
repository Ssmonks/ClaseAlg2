<?php

function numero($a)
{
    return $a + 1;
}

function muestraNombre()
{
    echo " <h3>Este es el nombre a mostrar.</h3>";
}
echo "<br>";
echo "<hr>";
muestraNombre();
echo "<br>";
echo "<hr>";

$a = 4;
echo numero($a);
