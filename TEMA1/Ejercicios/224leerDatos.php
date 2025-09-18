<?php
$cantidad = $_GET["numero"];
echo "<form action=224sumarDatos.php method=get>";
for ($i = 0; $i < $cantidad; $i++) {
    echo "<input type=number name=num id=num>
    ";
}
echo "
<input type=submit value=enviar>
</form>";
include "224sumarDatos.php";
?>