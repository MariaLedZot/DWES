<?php
/*
---
title: Ejercicio 8: División con valor por defecto y control de errores.
desc: Implementa dividir(num, divisor) con manejo de división por cero.
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

        </style>
    </head>

    <body>
        <?php
        function dividir(float $dividendo, float $divisor = 4): float|string {
            if ($divisor == 0) {
                return "Error: División por cero";
            }
            return $dividendo / $divisor;
        }

        echo "<br>La división de 3 entre 4 es: " . dividir(3, 4);
        echo "<br>La división de 6 entre 0 es: " . dividir(6, 0);
        echo "<br>La división de 6 entre (valor por defecto, porque no he indicado el divisor) es: " . dividir(6);
    
        ?>
    </body>

</html>