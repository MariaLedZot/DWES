<?php
/*
---
title: Ejercicio 1: Altura Media de Personas.
desc: Script PHP que calcula la altura media de un grupo de personas, muestra sus nombres y alturas en una tabla, e identifica a la persona más alta.
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
    $personas = [
        "Ana" => 1.65,
        "Luis" => 1.72,
        "Marta" => 1.58
    ];

    $total_altura = 0;
    $max_altura = 0;
    $persona_mas_alta = "";

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nombre</th><th>Altura</th></tr>";

    foreach ($personas as $nombre => $altura) {
        echo "<tr><td>$nombre</td><td>$altura</td></tr>";
        $total_altura += $altura;
        if ($altura > $max_altura) {
            $max_altura = $altura;
            $persona_mas_alta = $nombre;
        }
    }

    $altura_media = $total_altura / count($personas);

    echo "<tr><td><strong>Media</strong></td><td>$altura_media</td></tr>";

    echo "<tr><td><strong>Más alto</strong></td><td>$persona_mas_alta</td></tr>";

    echo "</table>";
    ?>

</body>

</html>