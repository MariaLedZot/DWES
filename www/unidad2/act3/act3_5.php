<?php
/*
---
title: Ejercicio 5: Suma de los Números del 1 al 10.
desc: Programa que suma los números del 1 al 10, usando un bucle while.
tags: [PHP, bucle]
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
    <title>Ejercicio 5</title>

    <style>

    </style>
</head>

<body>
    <?php
    echo "<h2>Suma de los números del 1 al 10</h2>";

    $suma = 0;
    $i = 1;

    while ($i <= 10) {
        $suma += $i;
        $i++;
    }

    echo "La suma de los números del 1 al 10 es: $suma";
    ?>

</body>

</html>