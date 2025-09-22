<?php
$respuestas =["Si", "no", "quizás", "claro que sí", "por supuesto que no", "no lo tengo claro", "seguro", "yo diría que sí", "ni de coña"];
$tamaño = count($respuestas);
$num = rand(0 ,$tamaño -1);
echo $respuestas[$num];
?>