<?php
/*
---
title: Ejercicio 4: Números Pares del 0 al 10.
desc: Uso de bucle.
tags: [PHP, basico, bucle, for]
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
    <title>Ejercicio 4</title>

    <style>

    </style>
</head>

<body>
    <?php
    echo "<h2>Números pares del 0 al 10</h2>";
    echo "<ul>";

    for ($i = 0; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "<li>$i</li>";
        }
    }

    echo "</ul>";
    ?>
</body>

</html>