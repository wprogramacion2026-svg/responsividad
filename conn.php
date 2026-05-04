<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gimnasio_db";

$conexion = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>