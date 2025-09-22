<?php
echo "<ul>";
for ($i = 0; $i < 51; $i++) {
    $num = rand(0, 99);
    echo "<li>" . $num . "</li>";
}
echo "</ul>";
?>