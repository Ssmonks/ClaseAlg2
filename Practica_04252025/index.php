<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>Autenticación</legend>
        <form action="./r.php" method="POST">
            <label for="usuario">Usuario</label><br />
            <input type="text" name="usuario" />
            <br />
            <label for="contrasena">Contraseña</label><br />
            <input type="text" name="contrasena" /><br /><br />
            <button type="submit">Enviar</button>
            <button type="reset">Limpiar</button>
        </form>
    </fieldset>
    <hr />
    <fieldset>
        <legend>Calcular Promedio de 3 Notas</legend>
        <form action="./arrayPromedio3Notas.php" method="POST">
            <label for="n1">Inserte la nota 1</label><br />
            <input type="text" name="n1" /><br />
            <label for="n2">Inserte la nota 2</label><br />
            <input type="text" name="n2" /><br />
            <label for="n3">Inserte la nota 3</label><br />
            <input type="text" name="n3" /><br /><br />
            <button type="submit">Enviar</button>
            <button type="reset">Limpiar</button>
        </form>
    </fieldset>
    <hr />
    <fieldset>
        <legend>Calcular Promedio de Notas</legend>
        <form action="./notasInput.php" method="POST">
            <label for="cantNotas">Inserte la cantidad de notas a subir</label><br />
            <input type="number" name="cantNotas" max="20" required /><br /><br />
            <button type="submit">Enviar</button>
            <button type="reset">Limpiar</button>
        </form>
    </fieldset>
</body>

</html>
<?php

require "encabezado.php";
require "cuerpo.php";
require "pie.php";

?>