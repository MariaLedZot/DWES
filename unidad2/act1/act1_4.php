<?php
/*
---
title: Ejercicio 4: Porcentaje aleatorio.
desc: Porcentaje aleatorio con indicador de medida.
tags: [PHP, basico]
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
        body {
            font-weight: bold;
            font-size: 30px;
            text-align: center;
            padding-top: 30px;
        }
    </style>
</head>

<body>
    <?php
    $porcentaje = rand(0, 100);
    ?>

    <p>Nivel: <?= $porcentaje ?>%</p>

    <meter value="<?= $porcentaje ?>" min="0" low="30" high="70" max="100">
        <?= $porcentaje ?>%
    </meter>
</body>

</html>