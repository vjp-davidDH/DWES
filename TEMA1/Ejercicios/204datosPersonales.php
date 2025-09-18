<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 php</title>
</head>
<body>
    <?php
    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    $email = $_GET["email"];
    $añoNac = $_GET["añoNac"];
    $tfno = $_GET["tfno"];
    echo "<table border=2>
        <tbody>
            <tr>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Email</td>
                <td>Año de Nacimiento</td>
                <td>Teléfono</td>
            </tr>
            <tr>
                <td>$nombre</td>
                <td>$apellidos</td>
                <td>$email</td>
                <td>$añoNac</td>
                <td>$tfno</td>
            </tr>
        </tbody>
    </table>"
    ?>
</body>
</html>