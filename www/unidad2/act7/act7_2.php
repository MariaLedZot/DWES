<?php
/*
---
title: Ejercicio 2: Array aleatorio (rango y tamaño).
desc: Genera un array de tamaño dado con enteros aleatorios entre un mínimo y un máximo y lo muestra.
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
        <title>Ejercicio 2</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        function arrayAleatorio(int $tam, int $min, int $max): array {
            $arr = [];
            for ($i = 0; $i < $tam; $i++) {
                $arr[] = rand($min, $max);
            }
            return $arr;
        }

        $resultado = arrayAleatorio(5, 1, 10);
        echo "<pre>";
        print_r($resultado);
        echo "</pre>";
        ?>
    </body>

</html>