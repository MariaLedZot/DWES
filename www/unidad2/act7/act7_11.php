<?php
/*
---
title: Ejercicio 11: Cartas.
desc: Generar cartas aleatorias.
tags: [PHP, funciones, concatenar, imágenes]
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
        <title>Ejercicio 11</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        function generaMatrizCartasRand(int $n): array {
            $palos = ['c', 'd', 'p', 't'];
            $cartas = [];

            for ($i = 0; $i < $n; $i++) {
                $palo = $palos[array_rand($palos)];
                $numero = rand(1, 13);
                $cartas[] = $palo . $numero;
            }

            return $cartas;
        }

        $numCartas = rand(5, 10);
        $cartas = generaMatrizCartasRand($numCartas);

        echo "<br><br>$numCartas cartas:<br>";

        foreach ($cartas as $carta) {
            echo "<img src='cartas/{$carta}.svg' alt='{$carta}' width='70' height='100' style='margin:5px;'>";
        }
        ?>
    </body>

</html>