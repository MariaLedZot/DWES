<?php
/*
---
title: Ejercicio 9: Contador por referencia.
desc: Incrementa un contador de visitas pasando el parámetro por referencia y muestra el total.
tags: [PHP, Paso por referencia, funciones, incremento]
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
        <title>Ejercicio 9</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        function aumentarVisitas(int $visitas): int {
            return ++$visitas;
        }

        $visitas = 0;
        $visitas = aumentarVisitas($visitas);
        echo "<br>El número de visitas ha aumentado a $visitas";
        ?>
    </body>

</html>