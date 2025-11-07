<?php
/*
---
title: Ejercicio 6: Librería de operaciones básicas.
desc: Define funciones para sumar, restar, multiplicar y dividir enteros (con intdiv en la división).
tags: [PHP, funciones, aritmética]
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
        <title>Ejercicio 6</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        function sumar(int $a, int $b): int { return $a + $b; }
        function restar(int $a, int $b): int { return $a - $b; }
        function multiplicar(int $a, int $b): int { return $a * $b; }
        function dividir(int $a, int $b): int {
            if ($b === 0) {
                throw new InvalidArgumentException("Error: No se puede dividir entre cero.");
            }
            return intdiv($a, $b);
        }
        ?>
    </body>

</html>