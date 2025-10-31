<?php
/*
---
title: Ejercicio 3: Filtrar mayores que 10.
desc: Usa array_filter con una función callback para quedarse solo con los valores > 10; imprime original y filtrado.
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
        <title>Ejercicio 3</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        function arrayMayores(array &$array): array {
            return array_filter($array, fn($n) => $n > 10);
        }

        $array = [2, 1, 24, 23];
        echo "<h3>Array original</h3><pre>";
        print_r($array);
        echo "</pre>";

        $filtrado = arrayMayores($array);
        echo "<h3>Array filtrado</h3><pre>";
        print_r($filtrado);
        echo "</pre>";
        ?>
    </body>

</html>