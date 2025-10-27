<?php
/*
---
title: Ejercicio 7: Números Pares e Impares con Colores.
desc: Script PHP que genera 10 números aleatorios entre 1 y 100 y los muestra en una tabla. Los números pares se muestran en azul y los impares en rojo utilizando estilos en línea.
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
    <title>Ejercicio 7</title>

    <style>

    </style>
</head>

<body>
    <?php
    $numeros = [];
    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(1, 100);
    }

    echo "<h2>Números con colores</h2>";

    echo "<table border='1' cellpadding='10'>";
    echo "<tr>";

    foreach ($numeros as $num) {
        $color = ($num % 2 == 0) ? "#4a62ebff" : "#f16464ff";
        echo "<td style='color: $color; text-align: center;'>$num</td>";
    }

    echo "</tr>";
    echo "</table>";
    ?>

</body>

</html>