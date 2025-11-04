<?php
session_start();
$error = isset($_GET['error']) ? $_GET['error'] : '';
$mensaje = '';

if ($error == 1) $mensaje = 'Usuario o contraseña incorrectos.';
if ($error == 2) $mensaje = 'Debes iniciar sesión para acceder.';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="David Domínguez Hinjos">
    <link rel="stylesheet" href="../css/410form.css">
    <title>Formulario de inicio de sesión</title> 
</head>
<body>
    <?php if ($mensaje): ?>
        <p style="color:red;"><?php echo htmlspecialchars($mensaje); ?></p>
    <?php endif; ?>
    <form action="411login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario">
        <label for="password">Contraseña:</label>
        <input type="password" name="password">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>