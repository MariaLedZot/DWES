<?php
/*
---
title: Ejercicio 2: Calificación Aleatoria.
desc: Script PHP que genera un número aleatorio entre 1 y 10, simulando una nota numérica.
tags: [PHP, if, else]
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
        
        body {
            font-family: times, 'Times New Roman', serif;
            padding: 1rem;
        }

        h2 {
            color: #303030ff;
        }

    </style>
</head>

<body>
    <?php
    echo "<h2>Simulación de Calificación</h2>";

    $nota = rand(0, 10);
    echo "<p>La nota generada es: $nota</p>";

    if ($nota < 5) {
        $calificacion = "Insuficiente";
    } elseif ($nota < 6) {
        $calificacion = "Suficiente";
    } elseif ($nota < 7) {
        $calificacion = "Bien";
    } elseif ($nota < 9) {
        $calificacion = "Notable";
    } else {
        $calificacion = "Sobresaliente";
    }

    echo "<h3>Calificación: $calificacion</h3>";
    ?>

</body>

</html>