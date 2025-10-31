<?php
/*
---
title: Ejercicio 1: Par o impar con función.
desc: Determina si un número es par usando una función y operador ternario; muestra el resultado.
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
        <title>Ejercicio 1</title>

        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 20px;
            }

            .resultado {
                background-color: #fff;
                border: 1px solid #ccc;
                padding: 15px;
                max-width: 400px;
                margin: auto;
                text-align: center;
                box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            }

            h1 {
                color: #333;
            }

            .par {
                color: green;
            }

            .impar {
                color: red;
            }
        </style>
    </head>

    <body>
        <?php
        function esPar(int $num): bool {
            return $num % 2 === 0;
        }

        $numero = 5;
        $mensaje = esPar($numero) ? "<span class='par'>El número $numero es par</span>" : "<span class='impar'>El número $numero es impar</span>";
        echo $mensaje;
        ?>
    </body>

</html>