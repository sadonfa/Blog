<?php

$servidor= "localhost";
$usuario= "sadonfa";
$pass = 1022353421;
$basededatos= "blog_udemy" ;

$db = mysqli_connect($servidor, $usuario, $pass, $basededatos );

mysqli_query($db,  "SET NAME 'utf8'");