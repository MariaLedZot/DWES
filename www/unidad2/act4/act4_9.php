<?php
/*
---
title: Ejercicio 9: Búsqueda de Emoji en un Grupo.
desc: Script PHP que genera entre 5 y 10 emojis aleatorios, los muestra en un grupo y luego selecciona un emoji adicional al azar para comprobar si está dentro del grupo.
tags: [PHP, foreach, in_array, Unicode]
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
        body {
            font-size: 1.5em;
            background-color: #f0f0f0;
            padding: 20px;
        }

    </style>
</head>

<body>
    <?php
    $cantidad_emoticonos = rand(5, 10);

    $emoticonos = [];
    for ($i = 0; $i < $cantidad_emoticonos; $i++) {
        $emoticonos[] = rand(128512, 128580);
    }

    echo "Grupo:";
    foreach ($emoticonos as $emoji) {
        echo "&#$emoji; ";
    }

    echo "<br><br>";

    $emoticono_azar = rand(128512, 128580);
    echo "Elegido: &#$emoticono_azar;<br>";

    if (in_array($emoticono_azar, $emoticonos)) {
        echo "El emoticono SÍ está en el grupo.";
    } else {
        echo "El emoticono NO está en el grupo.";
    }
    ?>

</body>

</html>