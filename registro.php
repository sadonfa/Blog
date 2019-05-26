<?php
require_once 'includes/conexion.php';

$name = $_POST['name'];
$last = $_POST['lastname'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];

$sql = "INSERT INTO usuarios(id, nombre, apellidos, email, pass, fecha) VALUES (NULL, '$name', '$last', '$mail', '$pass', '2019-05-25' ) ";

var_dump(mysqli_query($db, $sql));

