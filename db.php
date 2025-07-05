<?php
$host = 'localhost';
$db = 'usuarios_db';
$user = 'root'; // o tu usuario
$pass = '';     // o tu contraseña
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
