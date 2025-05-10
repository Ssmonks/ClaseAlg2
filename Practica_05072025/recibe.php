<?php
include "cone_r.php";

$nombre = $_POST['nombre'];
$pass = md5($_POST['pass']);
///////// Fin informacion enviada por el formulario /// 

////////////// Insertar a la tabla la informacion generada /////////
$sql = "insert into trabajadores(nombre,password) values(:nombre,:password)";

$sql = $connect->prepare($sql);

$sql->bindParam(':nombre', $nombre, PDO::PARAM_STR, 50);
$sql->bindParam(':password', $pass, PDO::PARAM_STR, 150);

$sql->execute();

$lastInsertId = $connect->lastInsertId();
if ($lastInsertId > 0) {
    echo '<script type="text/javascript">
     alert("Guardado exitosamente")
     window.location.href="index.php"
     </script>';
} else {
    print_r($sql->errorInfo());
}

?>