<?php
/*
---
title: Ejercicio 8: Operador Ternario.
desc: Otro uso del operador ternario.
tags: [PHP, basico, operadores, ternario]
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
        body {
            background-color: #f4f4f4;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2em;
            margin: 2em;
        }

        p {
            color: #333;
        }
    </style>
</head>

<body>
    <?php
    $precio1 = 25;
    $precio2 = 30;

    $resultado = $precio1 <=> $precio2;

    switch ($resultado) {
        case -1:
            echo "<p>El producto 1 es más barato.</p>";
            break;
        case 0:
            echo "<p>Ambos productos cuestan lo mismo.</p>";
            break;
        case 1:
            echo "<p>El producto 1 es más caro.</p>";
            break;
    }
    ?>
</body>

</html>