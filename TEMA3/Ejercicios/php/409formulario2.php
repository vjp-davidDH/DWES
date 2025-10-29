<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'] ?? '';
    $_SESSION['apellidos'] = $_POST['apellidos'] ?? '';
    $_SESSION['email'] = $_POST['email'] ?? '';
    $_SESSION['url'] = $_POST['url'] ?? '';
    $_SESSION['sexo'] = $_POST['sexo'] ?? '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Paso 2</title>
</head>
<body>
    <h2>Información adicional</h2>
    <form method="POST" action="409formulario3.php">
        <label>Número de convivientes:</label>
        <input type="number" name="convivientes" min="0"><br><br>

        <label>Aficiones:</label><br>
        <input type="checkbox" name="aficiones[]" value="Lectura"> Lectura<br>
        <input type="checkbox" name="aficiones[]" value="Deporte"> Deporte<br>
        <input type="checkbox" name="aficiones[]" value="Viajar"> Viajar<br>
        <input type="checkbox" name="aficiones[]" value="Música"> Música<br><br>

        <label>Menú preferido:</label>
        <select name="menu">
            <option value="Vegetariano">Vegetariano</option>
            <option value="Tradicional">Tradicional</option>
            <option value="Internacional">Internacional</option>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
