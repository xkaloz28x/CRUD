<?php
include 'db.php';
if ($_POST) {
    $stmt = $conn->prepare("INSERT INTO usuarios (username, nombre, apellido, telefono, correo) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $_POST['username'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['correo']);
    $stmt->execute();
}
header("Location: index.php");
?>
