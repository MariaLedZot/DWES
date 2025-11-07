<?php
/*
---
title: Ejercicio 7: Llamada dinámica a operaciones.
desc: Importa las funciones de la librería y las ejecuta dinámicamente por nombre sobre dos números, mostrando cada resultado.
tags: [PHP, require_once, funciones dinámicas, foreach]
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
        include "act7_6.php";

        $numeros = [10, 5];
        $funciones = ["sumar", "restar", "multiplicar", "dividir"];

        foreach ($funciones as $func) {
            $resultado = (function($a, $b) use ($func) {
                return $func($a, $b);
            })($numeros[0], $numeros[1]);

            echo "$func: $resultado<br>";
        }
        ?>
    </body>

</html>