<?php
session_start();
include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

$username = $_POST['usuario'];
$password = $_POST['password'];

$sql = "SELECT id_run, password FROM users WHERE id_run='$username' AND password = '$password'";
$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());
$data = pg_fetch_array($result);
if($data['id_run']) {
    $_SESSION['UserId'] = $data['id_run'];
    header("Location: ../form.html");
}else {
    echo "error";
}
?>
