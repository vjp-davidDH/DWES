<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="224sumarDatos.php" method="post">
        <?php
        $cantidad = $_GET["numero"];
        for ($i = 0; $i < $cantidad; $i++) {
            echo "<input type=number name=numero[]>";
        }
        ?>
    <button type="submit">Sumar</button>
    </form>


</body>

</html>