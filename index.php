<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Usuarios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Agregar Usuario</h2>
    <form action="add.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <button type="submit">Agregar</button>
    </form>

    <h2>Lista de Usuarios</h2>
    <table>
        <tr>
            <th>Username</th><th>Nombre</th><th>Apellido</th>
            <th>Teléfono</th><th>Correo</th><th>Acciones</th>
        </tr>
        <?php
        $res = $conn->query("SELECT * FROM usuarios");
        while ($row = $res->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['username'] ?></td>
            <td><?= $row['nombre'] ?></td>
            <td><?= $row['apellido'] ?></td>
            <td><?= $row['telefono'] ?></td>
            <td><?= $row['correo'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Editar</a> | 
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('¿Seguro?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
