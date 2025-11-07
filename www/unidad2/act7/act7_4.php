<?php
/*
---
title: Ejercicio 4: Máximo con parámetros variables.
desc: Implementa una función que devuelve el mayor de una lista de números.
tags: [PHP, parámetros variables, bucles]
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
        <title>Ejercicio 4</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        function mayor(int ...$nums): int {
            $mayor = $nums[0];
            foreach ($nums as $n) {
                if ($n > $mayor) $mayor = $n;
            }
            return $mayor;
        }

        $numeros = [2, 3, 24, 1];
        echo "<p>Array</p><pre>";
        print_r($numeros);
        echo "</pre>";
        echo "<p>El número mayor es " . mayor(...$numeros) . "</p>";
        ?>
    </body>

</html>