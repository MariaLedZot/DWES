<?php
/*
---
title: Ejercicio 5: Total de puntos - Dados.
desc: Dados aleatorios y total de puntos.
tags: [PHP, basico]
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
        body {
            font-weight: bold;
            font-size: 30px;
            text-align: center;
        }

        img {
            width: 100px;
            margin: 10px;
            padding-top: 30px;
        }
    </style>

</head>

<body>

    <?php
    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);

    echo "<img src='img/dado$dado1.svg' alt='Dado $dado1'>";
    echo "<img src='img/dado$dado2.svg' alt='Dado $dado2'>";

    $total = $dado1 + $dado2;

    echo "<p>Total de puntos: $total</p>";
    ?>

</body>

</html>