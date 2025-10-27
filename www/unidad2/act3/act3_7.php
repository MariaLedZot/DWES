<?php
/*
---
title: Ejercicio 7: Tirada de dos dados.
desc: Escriba un programa que cada vez que se ejecute muestre la tirada de dos dados al azar y diga si ha salido una pareja de valores iguales o no.
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
    <title>Ejercicio 7</title>

    <style>

    </style>
</head>

<body>
    <?php
    $valor1 = rand(1, 6);
    $valor2 = rand(1, 6);

    echo "<h2>Tirada de dos dados:</h2>";
    echo "<img src='img/dado$valor1.svg' alt='Dado $valor1' style='width:100px; margin:10px;'>";
    echo "<img src='img/dado$valor2.svg' alt='Dado $valor2' style='width:100px; margin:10px;'>";

    if ($valor1 == $valor2) {
        echo "<p>Has sacado una pareja de $valor1.</p>";
    } else {
        echo "<p>No has sacado pareja.</p>";
    }
    ?>

</body>

</html>