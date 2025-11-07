<?php
/*
---
title: Ejercicio 5: Filtrar Productos por Precio.
desc: Muestra solo los productos cuyo precio supera un umbral (p. ej., 20 €) y los presenta en una tabla HTML.
tags: [PHP, array_filter, foreach]
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
        $productos = [
            ["nombre" => "Camiseta", "precio" => "15.00"],
            ["nombre" => "Pantalón", "precio" => "35.00"],
            ["nombre" => "Zapatos", "precio" => "50.00"],
            ["nombre" => "Gorra", "precio" => "10.00"],
        ];

        $caros = array_filter($productos, fn($p) => $p["precio"] > 20.00);

        echo "<h2>Ejercicio 5 — Filtrar productos caros.</h2>";
        echo "<h3>Lista completa de productos</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'><tr><th>Producto</th><th>Precio (€)</th></tr>";
        foreach ($productos as $p) {
            echo "<tr><td>{$p['nombre']}</td><td>{$p['precio']}</td></tr>";
        }
        echo "</table>";

        echo "<h3>Productos con precio superior a 20 €</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'><tr><th>Producto</th><th>Precio (€)</th></tr>";
        foreach ($caros as $p) {
            echo "<tr><td>{$p['nombre']}</td><td>{$p['precio']}</td></tr>";
        }
        echo "</table>";
        ?>
    </body>

</html>