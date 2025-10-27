<?php
/*
---
title: Ejercicio 3: Número en Castellano.
desc: Uso del operador match para convertir un número en su representación en castellano.
tags: [PHP, match]
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
            font-family: times, 'Times New Roman', serif;
            padding: 1rem;
            color: #303030ff;
            font-size: 2rem;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    $numero = rand(1, 3);

    $texto = match ($numero) {
        1 => 'uno',
        2 => 'dos',
        3 => 'tres',
        default => 'DESCONOCIDO',
    };

    echo "El número generado es $numero y en castellano es: $texto.";
    ?>
</body>

</html>