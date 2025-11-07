<?php
/*
---
title: Ejercicio 2: Empleados Activos en Tabla.
desc: Filtra un listado de empleados para mostrar solo los que están en estado activo dentro de una tabla HTML.
tags: [PHP, array_filter, foreach, html-table]
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
        $empleados = [
            ["nombre" => "Ana", "departamento" => "Ventas", "estado" => "activo"],
            ["nombre" => "Luis", "departamento" => "Marketing", "estado" => "inactivo"],
            ["nombre" => "María", "departamento" => "RRHH", "estado" => "activo"],
            ["nombre" => "Pedro", "departamento" => "IT", "estado" => "inactivo"]
        ];

        $activos = array_filter($empleados, fn($e) => $e["estado"] === "activo");

        echo "<h2>Empleados</h2>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr style='background-color:#ddd;'>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Estado</th>
        </tr>";

        foreach ($empleados as $emp) {
            echo "<tr>
                    <td>{$emp['nombre']}</td>
                    <td>{$emp['departamento']}</td>
                    <td>{$emp['estado']}</td>
                </tr>";
        }
        echo "</table>";

        echo "<h2>Empleados activos</h2>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr style='background-color:#ddd;'>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Estado</th>
        </tr>";

        foreach ($activos as $emp) {
            echo "<tr>
                    <td>{$emp['nombre']}</td>
                    <td>{$emp['departamento']}</td>
                    <td>{$emp['estado']}</td>
                </tr>";
        }
        echo "</table>";
        ?>
    </body>

</html>