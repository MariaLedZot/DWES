<?php
/*
---
title: Ejercicio 6: Tabla de multiplicar.
desc: Muestra dentro de una tabla HTML la tabla de multiplicar del número que se indique en una variable. Usa un bucle for.
tags: [PHP, bucle, while]
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
    $numero = 7; // Número para generar la tabla

    echo "<h2>Tabla de multiplicar del $numero</h2>";
    echo "<table border='1' cellspacing='0' cellpadding='8' style='border-collapse: collapse; text-align: center;'>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<tr>
            <td>$numero</td>
            <td>x</td>
            <td>$i</td>
            <td>=</td>
            <td>$resultado</td>
            </tr>";
    }

    echo "</table>";
    ?>
    
</body>

</html>