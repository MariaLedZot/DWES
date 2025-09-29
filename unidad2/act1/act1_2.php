<?php
/*
---
title: Ejercicio 2: Media aritmética.
desc: Media aritmética de 2 números al azar.
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
    <title>Ejercicio 2</title>

    <style>
        body {
            font-family: 'Libre Baskerville', serif;
            color: #ee682aff;
            font-size: 22px;
            text-align: center;
            padding-top: 50px;
        }
    </style>
</head>

<body>
    <?php

    $n1 = rand(0, 100);
    $n2 = rand(0, 100);
    $media = ($n1 + $n2) / 2;

    echo "La media aritmética de <b>$n1</b> y <b>$n2</b> es <b>$media</b>";
    ?>
</body>

</html>