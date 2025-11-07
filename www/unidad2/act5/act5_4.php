<?php
/*
---
title: Ejercicio 4: Validación de Formulario — Campos Faltantes.
desc: Compara los campos obligatorios de un formulario con los datos enviados por el usuario y lista los que faltan.
tags: [PHP, array_diff_key, forms, validation, foreach]
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
        $obligatorios = ["nombre", "email", "edad", "telefono"];
        $enviados = [
            "nombre" => "Ana",
            "edad" => "25"
        ];

        $faltan = array_diff($obligatorios, array_keys($enviados));
        echo "<h2>Validación de formulario</h2>";

        echo "<h3>Campos obligatorios</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr style='background-color:#ddd;'>
            <th>Campo</th>
        </tr>";
        foreach ($obligatorios as $campo) {
            echo "<tr><td>$campo</td></tr>";
        }
        echo "</table>";

        echo "<h3>Campos enviados por el usuario</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>
        <tr style='background-color:#ddd;'>
            <th>Campo</th>
            <th>Valor</th>
        </tr>";
        foreach ($enviados as $campo => $valor) {
            echo "<tr><td>$campo</td><td>$valor</td></tr>";
        }
        echo "</table>";

        // Lista: Campos faltantes
        echo "<h3>Campos faltantes</h3>";
        if (empty($faltan)) {
            echo "<p style='color:green;'>No faltan campos obligatorios.</p>";
        } else {
            echo "<ul>";
            foreach ($faltan as $campo) {
                echo "<li style='color:red;'>$campo</li>";
            }
            echo "</ul>";
        }
        ?>
    </body>

</html>