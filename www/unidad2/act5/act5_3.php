<?php
/*
---
title: Ejercicio 3: Participantes Comunes en Dos Actividades.
desc: Obtiene las personas que aparecen en ambas listas de inscritos a partir de la intersección de arrays y las muestra.
tags: [PHP, array_intersect, foreach]
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

        </style>
    </head>

    <body>
        <?php
        $actividad1 = ["Carlos", "Lucía", "Marcos", "Ana"];
        $actividad2 = ["Ana", "Pedro", "Lucía", "Javier"];

        $ambas = array_intersect($actividad1, $actividad2);

        echo "<h3>Personas en actividad 1</h3><ul>";
        foreach ($actividad1 as $persona) {
            echo "<li>$persona</li>";
        }
        echo "</ul>";

        echo "<h3>Personas en actividad 2</h3><ul>";
        foreach ($actividad2 as $persona) {
            echo "<li>$persona</li>";
        }
        echo "</ul>";

        echo "<h3>Personas en ambas actividades</h3><ul>";
        foreach ($ambas as $persona) {
            echo "<li>$persona</li>";
        }
        echo "</ul>";
        ?>
    </body>

</html>