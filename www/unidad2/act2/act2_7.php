<?php
/*
---
title: Ejercicio 7: Operador ternario.
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
    <title>Ejercicio 7</title>

    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.2em;
            margin: 2em;
        }
    </style>
</head>

<body>
    <?php
    $usuario = "María Ledesma Zotano";
    echo ($usuario ?? null) ? "Bienvenid@ $usuario." : "Debes introducir un usuario.";
    ?>
</body>

</html>