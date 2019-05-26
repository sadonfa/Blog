<?php
require_once 'includes/conexion.php';

$name = $_POST['name'];
$last = $_POST['lastname'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];

$sql = "INSERT INTO usuarios(id, nombre, apellidos, email, pass, fecha)
     VALUES (NULL, '$name', '$last', '$mail', '$pass', CURDATE() ) ";

$query = mysqli_query($db, $sql);

if ($query) {
    header("Location:index.php?registro=1");
}else {
    header("Location:index.php?registro=0");
}