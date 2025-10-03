<?php
/*
---
title: Ejercicio 4: Operador ternario.
desc: Uso del operador ternario.
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
    <title>Ejercicio 4</title>

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
    $saldo = "1000";
    $ingreso = 250;

    $saldo = (int)$saldo;
    $total = $saldo + $ingreso;

    echo ($total > 1200)
        ? "Cliente VIP."
        : "Cliente normal.";
    ?>
</body>

</html>