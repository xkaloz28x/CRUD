<?php
include 'db.php';
if ($_POST) {
    $stmt = $conn->prepare("UPDATE usuarios SET username=?, nombre=?, apellido=?, telefono=?, correo=? WHERE id=?");
    $stmt->bind_param("sssssi", $_POST['username'], $_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['correo'], $_POST['id']);
    $stmt->execute();
}
header("Location: index.php");
?>
