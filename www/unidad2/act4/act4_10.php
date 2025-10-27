<?php
/*
---
title: Ejercicio 10: Tirada y Ordenación de Dados.
desc: Script PHP que genera entre 2 y 7 dados con valores aleatorios entre 1 y 6, muestra las imágenes correspondientes a cada tirada y luego ordena los dados para mostrarlos nuevamente en orden ascendente.
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
    <title>Ejercicio 10</title>

    <style>

    </style>
</head>

<body>
    <?php
    $num_dados = rand(2, 7);

    $dados = [];

    for ($i = 0; $i < $num_dados; $i++) {
        $dados[] = rand(1, 6);
    }

    echo "<h2>Tirada de $num_dados dados:</h2>";
    foreach ($dados as $dado) {
        echo "<img src='img/dado$dado.svg' alt='Dado $dado' width='50'> ";
    }

    echo "<br><br>";

    sort($dados);

    echo "<h2>Tirada ordenada:</h2>";
    foreach ($dados as $dado) {
        echo "<img src='img/dado$dado.svg' alt='Dado $dado' width='50'> ";
    }
    ?>

</body>

</html>