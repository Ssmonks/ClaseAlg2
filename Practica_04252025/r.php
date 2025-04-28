<?php
$usuario = $_POST["usuario"];
$pass = $_POST["contrasena"];

if ($usuario == 'admin' && $pass == 'admin') {
    include 'array.php';
} else {
    include 'vista.php';
}
?>