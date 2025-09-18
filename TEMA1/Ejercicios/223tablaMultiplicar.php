<?php
$numero = $_GET["numero"];
$inicio = 1;
$fin = 11;
$resultado = 0;
echo "<table border = 2>
        <thead>
            <tr>
                <th>a * b = a*b</th>
            </tr>
        </thead>";
for ($i = $inicio; $i < $fin; $i++) {
    $resultado = $numero * $i;
    echo "<tbody>
                <tr>
                    <td>$numero  *  $i  =  $resultado</td>
                </tr>
        </tbody>";
}