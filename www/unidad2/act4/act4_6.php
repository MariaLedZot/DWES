<?php
/*
---
title: Ejercicio 6: Rotación de un Array.
desc: Script PHP que genera un array de 10 números aleatorios entre 1 y 100, guarda una copia del original y luego rota el array moviendo el último elemento a la primera posición. Finalmente muestra ambos arrays.
tags: [PHP, array_pop, array_unshift, arrays]
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
    <title>Ejercicio 6</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            margin: 20px;
            font-weight: bold;
        }

    </style>
</head>

<body>
    <?php
    $numeros = [];
    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(1, 100);
    }

    $original = $numeros;

    $ultimo = array_pop($numeros);
    array_unshift($numeros, $ultimo);

    echo "Original: " . implode(", ", $original) . "<br>";
    echo "Rotado: " . implode(", ", $numeros);
    ?>

</body>

</html>