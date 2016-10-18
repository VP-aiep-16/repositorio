<?php
include 'config/db.conf.php';

$db = pg_connect("host=$host port=$port dbname=$dbname user=$username password=$password") or die('connection failed');

$sql = "SELECT users.id_run, users.nombre, users.apellido, users.telefono, users.correo, users.password FROM users";



$result = pg_query($db, $sql) or die('SQL ERROR 1: ' . pg_last_error());

while ($data = pg_fetch_array($result)) {
    $users[] = array(
        'id' => $data['id_run'],
        'nombre' => $data['nombre']. ' '. $data['apellido'], 'fono' => $data['telefono'], ' correo ' => $data['correo'], 'pass' => $data['password']
     );
}
echo json_encode($users);
?>
