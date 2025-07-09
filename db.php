<?php
$host = 'sql202.infinityfree.com';
$db = 'if0_39426880_usuarios_db';
$user = 'if0_39426880'; // 
$pass = 'contra291202';    
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
