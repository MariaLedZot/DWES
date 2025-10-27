<?php
/*
---
title: Ejercicio 5: Cálculo de Precios con IVA.
desc: Script PHP que muestra una tabla de productos con su precio sin IVA, tipo de IVA aplicado y precio final con IVA. Utiliza arrays para almacenar productos y tipos de IVA, y un bucle foreach para generar las filas de la tabla.
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
    <title>Ejercicio 5</title>

    <style>

    </style>
</head>

<body>
    <?php
    $productos = [
        ["nombre" => "Pan", "precio" => 1.20, "iva" => 1],
        ["nombre" => "Leche", "precio" => 0.95, "iva" => 2],
        ["nombre" => "Libro", "precio" => 12.00, "iva" => 3],
        ["nombre" => "TV", "precio" => 300.00, "iva" => 4],
        ["nombre" => "Zapatos", "precio" => 50.00, "iva" => 4],
        ["nombre" => "Cerveza", "precio" => 1.50, "iva" => 3],
        ["nombre" => "Vino", "precio" => 8.00, "iva" => 3],
        ["nombre" => "Ordenador", "precio" => 800.00, "iva" => 4],
        ["nombre" => "Chocolate", "precio" => 2.00, "iva" => 1],
        ["nombre" => "Queso", "precio" => 3.50, "iva" => 2],
    ];

    $ivas = [
        1 => 0.00,
        2 => 0.04,
        3 => 0.10,
        4 => 0.21
    ];

    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Producto</th><th>Sin IVA (€)</th><th>Tipo</th><th>Con IVA (€)</th></tr>";

    foreach ($productos as $producto) {
        $precio_sin_iva = $producto["precio"];
        $tipo_iva = $producto["iva"];
        $precio_con_iva = $precio_sin_iva * (1 + $ivas[$tipo_iva]);

        echo "<tr>";
        echo "<td>{$producto['nombre']}</td>";
        echo "<td>" . number_format($precio_sin_iva, 2) . "</td>";
        echo "<td>{$tipo_iva}</td>";
        echo "<td>" . number_format($precio_con_iva, 2) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>

</html>