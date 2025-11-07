<?php
/*
---
title: Ejercicio 10: Función flecha con cierre (IVA).
desc: Usa una function flecha que captura $iva para calcular el precio final de varios importes.
tags: [PHP, función flecha, variables-externas]
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
        <title>Ejercicio 10</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        $iva = 0.21;

        $calcularPrecioFinal = fn(float $precio) => $precio * (1 + $iva);

        echo "<br>El IVA es del " . ($iva * 100) . "%<br>";
        echo "Precio final de 100: " . $calcularPrecioFinal(100) . "<br>";
        echo "Precio final de 250: " . $calcularPrecioFinal(250) . "<br>";
        echo "Precio final de 50: " . $calcularPrecioFinal(50) . "<br>";
        ?>
    </body>

</html>