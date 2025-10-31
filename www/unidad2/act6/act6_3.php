<?php
/*
---
title: Ejercicio 3: Resaltar coincidencias en un texto.
desc: Busca un término en el texto con strpos y lo rodea con <mark> usando substr para reconstruir.
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
        <title>Ejercicio 3</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        $texto = "PHP es fantástico. Con PHP puedes construir sitios dinámicos. PHP mola.";
        $termino = "PHP";

        $patron = '/' . preg_quote($termino, '/') . '/';
        $textoResaltado = preg_replace($patron, "<mark>$termino</mark>", $texto);

        echo "<strong>Texto</strong>: $texto<br>";
        echo "<strong>Término</strong>: $termino<br>";
        echo "<strong>Resultado</strong>: $textoResaltado";
        ?>
    </body>

</html>