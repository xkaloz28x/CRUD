<?php
include 'db.php';
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$user = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h2>Editar Usuario</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <input type="text" name="username" value="<?= $user['username'] ?>" required>
        <input type="text" name="nombre" value="<?= $user['nombre'] ?>" required>
        <input type="text" name="apellido" value="<?= $user['apellido'] ?>" required>
        <input type="text" name="telefono" value="<?= $user['telefono'] ?>" required>
        <input type="email" name="correo" value="<?= $user['correo'] ?>" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
