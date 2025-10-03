<?php
/*
---
title: Ejercicio 2: Resultado de expresión.
desc: Explicación de una expresión con multiplicaciones, divisiones, sumas y restas.
tags: [PHP, basico, operadores, preincremento]
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
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #555;
        }

        h3 {
            color: #777;
        }

        p {
            font-size: 1.2em;
            color: #000;
        }
    </style>
</head>

<body>
    <?php
    $a = 5;
    $b = 10;
    $c = 15;
    $d = 20;

    $result = ++$a * $b / $c + $d-- - $a;
    echo 'Resultado de la operación: ' . $result;
    ?>

    <h1>Explicación para: $a = 5, $b = 10, $c = 15, $d = 20;</h1>
    <h2>++$a * $b / $c</h2>
    <h3>6 * 10 / 15</h3>
    <p>= 4</p>
    <h2>4 + $d-- - $a</h2>
    <h3>4 + 20 - 6</h3>
    <p>= 18</p>
</body>

</html>