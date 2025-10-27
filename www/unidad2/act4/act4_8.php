<?php
/*
---
title: Ejercicio 8: Bolas Aleatorias y Eliminación de Duplicados.
desc: Script PHP que genera entre 5 y 15 bolas aleatorias representadas por códigos Unicode, las muestra en pantalla y luego elimina duplicados, indicando cuántas bolas distintas hay.
tags: [PHP]
code: https://github.com/
---
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="María Ledesma Zotano • 2º DAW">
    <title>Ejercicio 8</title>

    <style>
        body {
            font-size: 1.5em;
        }

    </style>
</head>

<body>
    <?php
    $cantidad_bolas = rand(5, 15);

    $bolas = [];
    for ($i = 0; $i < $cantidad_bolas; $i++) {
        $bolas[] = rand(1, 10);
    }

    echo "<h2>Entre estas 6 bolas ...</h2>";
    foreach ($bolas as $bola) {
        echo "&#" . (10101 + $bola) . " ";
    }

    echo "<br><br>";

    $bolas_sin_repetidos = array_unique($bolas);

    echo "<h2>... hay x bolas distintas</h2>";
    foreach ($bolas_sin_repetidos as $bola) {
        echo "&#" . (10101 + $bola) . " ";
    }
    ?>

</body>

</html>