<?php
/*
---
title: Ejercicio 5: Dígito en posición n.
desc: Devuelve el dígito que ocupa una posición concreta dentro de un número y lo muestra.
tags: [PHP, strings, indices, funciones]
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
        function digitoN(int $num, int $pos): int {
            return (int)strval($num)[$pos - 1];
        }

        $num = 2674;
        $pos = 3;
        echo "<p>El número es $num y la posición que pido es la $pos</p>";
        echo "<p>En esa posición está el " . digitoN($num, $pos) . "</p>";
        ?>
    </body>

</html>