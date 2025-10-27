<?php
/*
---
title: Ejercicio 1: Catálogo Unificado de Productos.
desc: Une dos listas de productos de distintos proveedores, elimina duplicados, ordena alfabéticamente y muestra el resultado.
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
        <title>Ejercicio 1</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        $proveedor1 = ["Monitor", "Teclado", "Ratón", "Impresora"];
        $proveedor2 = ["Altavoces", "Monitor", "Webcam", "Ratón"];

        $productosUnidos = array_merge($proveedor1, $proveedor2);
        $productosSinDuplicados = array_unique($productosUnidos);
        sort($productosSinDuplicados);

        echo "<h2>Proveedor 1</h2><ul>";
        foreach ($proveedor1 as $producto) {
            echo "<li>$producto</li>";
        }
        echo "</ul>";

        echo "<h2>Proveedor 2</h2><ul>";
        foreach ($proveedor2 as $producto) {
            echo "<li>$producto</li>";
        }
        echo "</ul>";

        echo "<h2>Proveedor 3</h2><ul>";
        foreach ($productosSinDuplicados as $producto) {
            echo "<li>$producto</li>";
        }
        echo "</ul>";
        ?>
    </body>

</html>