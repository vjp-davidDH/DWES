<?php
$datos = $_POST ?? [];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="David Domínguez Hinjos">
    <title>Tabla-resumen</title>
</head>

<body>

    <table border="1">
        <tr>
            <th>Campo</th>
            <th>Valor</th>
        </tr>
        <?php
        if ($datos) {
            foreach ($datos as $campo => $valor) {
                if (is_array($valor)) $valor = implode(", ", $valor);
                echo "<tr><td>$campo</td><td>$valor</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No se han enviado datos</td></tr>";
        }
        ?>
    </table>
</body>

</html>