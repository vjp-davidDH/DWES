<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Paso 1</title>
</head>
<body>
    <h2>Datos personales</h2>
    <form method="POST" action="409formulario2.php">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>URL:</label>
        <input type="url" name="url"><br><br>

        <label>Sexo:</label>
        <input type="radio" name="sexo" value="Hombre" required> Hombre
        <input type="radio" name="sexo" value="Mujer"> Mujer<br><br>

        <button type="submit">Siguiente</button>
    </form>
</body>
</html>
