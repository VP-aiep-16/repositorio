<?php

include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

$rut = $_POST['rut'].$_POST['verif'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$numero = $_POST['numero'];
$correo = $_POST['correo'];
$pass = $_POST['pass'];

pg_query("INSERT INTO users(id_run,nombre,apellido,telefono,correo,password) Values ('$rut','$nombre','$apellido','$numero','$correo','$pass')")  or die('SQL ERROR 1: ' . pg_last_error());

header("Location: ../index.html");

?>