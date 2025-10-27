<?php
/*
---
title: Ejercicio 8: Tirada de entre 1 y 5 dados.
desc: Escriba un programa que cada vez que se ejecute muestre la tirada de entre 1 y 5 dados al azar y diga el valor mínimo obtenido.
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
    <title>Ejercicio 8</title>

    <style>

    </style>
</head>

<body>
    <?php
    $num_dados = rand(1, 5);

    echo "<h2>Tirada de $num_dados dado(s):</h2>";

    $valores = [];

    for ($i = 0; $i < $num_dados; $i++) {
        $valor = rand(1, 6);
        $valores[] = $valor;
        echo "<img src='img/dado$valor.svg' alt='Dado $valor' style='width:100px; margin:10px;'>";
    }

    $minimo = min($valores);

    echo "<p>El valor más pequeño obtenido es: <strong>$minimo</strong></p>";
    ?>
</body>

</html>