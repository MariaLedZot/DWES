<?php
/*
---
title: Ejercicio 1: Longitud de comentario (SMS 160).
desc: Mide la longitud del texto y muestra cuántos caracteres faltan o sobran respecto a 160.
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

        </style>
    </head>

    <body>
        <?php
        echo "<h3>Comentario</h3>";

        $comentario = "Este es mi comentario para soporte técnico.";
        $longitud = strlen($comentario);
        $diferencia = 160 - $longitud;

        echo "$comentario <br>";
        echo "Longitud: <strong>$longitud</strong> caracteres<br>";
        echo ($diferencia >= 0) ? "Te quedan <strong>$diferencia</strong> caracteres." : "Se excede el límite por " . abs($diferencia) . " caracteres.";
        ?>
    </body>

</html>