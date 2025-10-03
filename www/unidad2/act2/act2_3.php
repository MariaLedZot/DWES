<?php
/*
---
title: Ejercicio 3: Operador nave espacial.
desc: Uso del operador nave espacial.
tags: [PHP, basico, operadores, nave espacial]
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
    <title>Ejercicio 3</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
    </style>
</head>

<body>
    <?php
    $num = 0;
    echo ($num <=> 0) == 1
        ? "El número es positivo."
        : (($num <=> 0) == -1
            ? "El número es negativo."
            : "El número es cero.");
    ?>
</body>

</html>