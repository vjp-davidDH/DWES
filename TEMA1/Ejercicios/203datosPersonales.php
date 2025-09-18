<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    $nombre = "David";
    $apellidos = "Domínguez Hinjos";
    $email = "ddominguezh04@iesvjp.es";
    $añoNac = 2006;
    $tfno = 625325746;
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