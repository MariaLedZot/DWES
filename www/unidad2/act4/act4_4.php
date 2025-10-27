<?php
/*
---
title: Ejercicio 4: Media de Números Aleatorios.
desc: Script PHP que genera tres números aleatorios entre 0 y 100, calcula su media y muestra el resultado en pantalla utilizando printf.
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
    <title>Ejercicio 4</title>

    <style>
        p {
            font-family: Arial, sans-serif;
            font-size: 1.5rem;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <?php
    $numeros = range(0, 100);

    $aleatorios = array_rand(array_flip($numeros), 3);

    $media = array_sum($aleatorios) / count($aleatorios);

    echo "<p>La media de {$aleatorios[0]}, {$aleatorios[1]} y {$aleatorios[2]} es $media</p>";
    ?>

</body>

</html>