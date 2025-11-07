<?php
/*
---
title: Ejercicio 2: Partes del nombre e iniciales (soporta nombre compuesto).
desc: Toma los dos últimos tokens como apellidos y el resto como nombre; también calcula las iniciales.
tags: [PHP, explode, implode, substr]
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
        <title>Ejercicio 2</title>

        <style>

        </style>
    </head>

    <body>
        <?php
        $nombreCompleto = "Ana Maria Lopez Perez";
        $partes = explode(" ", $nombreCompleto);

        $nombre = $partes[0] . " " . $partes[1];

        $primerApellido = $partes[2];

        $segundoApellido = $partes[3];

        $iniciales = "";
        foreach ($partes as $palabra) {
            $iniciales .= strtoupper($palabra[0]) . ".";
        }

        echo "<strong>Nombre completo</strong>: $nombreCompleto<br>";
        echo "<strong>Nombre</strong>: $nombre<br>";
        echo "<strong>Primer apellido</strong>: $primerApellido<br>";
        echo "<strong>Segundo apellido</strong>: $segundoApellido<br>";
        echo "<strong>Iniciales</strong>: $iniciales";
        ?>
    </body>

</html>