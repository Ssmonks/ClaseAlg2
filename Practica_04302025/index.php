<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <fieldset>
        <legend>Calculadora</legend>
        <form action="./operaciones.php" method="POST">
            <label>Seleccione la operación a realizar <select name="operation" id="operation" onchange="operacionSeleccionada(this.value)">
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="mult">Multiplicación</option>
                    <option value="div">División</option>
                    <option value="par/impar">Par/Impar</option>
                    <option value="fact">Factorial</option>
                    <option value="fibo">Fibonacchi</option>
                    <option value="bis">Año Bisiesto</option>
                    <option value="primo">Es Primo</option>
                    <option value="cubo">Cubo</option>
                    <option value="cuadrado">Cuadrado</option>
                </select></label><br><br>
            <label>Ingrese el Primer Numero <input type="number" name="number1" id="number1" max="100" required placeholder="Numero 1" /></label><br><br>
            <label id="labelNumber2">Ingrese el Segundo Numero <input type="number" name="number2" id="number2" max="100" required placeholder="Numero 2" /></label><br><br>
            <button type="submit">Enviar</button>
            <button type="reset">Limpiar</button>
        </form>
    </fieldset>
    <script src="./main.js"></script>
</body>

</html>

<?php
/* include "./funcionesPHP.php" */
?>