<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <fieldset>
        <legend>Ingrese sus datos</legend>
        <form action="./recibe.php" method="post">
            <label> Nombre: <input type="text" name="nombre" maxlength="50" required /></label><br><br>
            <label> Contraseña: <input type="password" name="pass" maxlength="4" required /></label><br><br>
            <input type="submit" value="Enviar" />
            <input type="reset" value="Limpiar" />
        </form>
    </fieldset>
</body>

</html>

<?php include './tabla.php' ?>