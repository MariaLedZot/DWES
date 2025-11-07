<?php
/*
---
title: Ejercicio 3: Conteo de Sexo Aleatorio.
desc: Script PHP que genera aleatoriamente el sexo (M o F) de 5 personas, los muestra en una tabla numerada y cuenta cuántos hombres y mujeres hay utilizando un array contador.
tags: [PHP, rand, foreach, array, contador]
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
    $generos = [];
    for ($i = 0; $i < 5; $i++) {
        $generos[] = rand(0, 1) ? 'M' : 'F';
    }

    $resultado = array_merge(['M' => 0, 'F' => 0], array_count_values($generos));

    echo "<h3>Personas</h3>";
    echo "<table border='1' cellpadding='5' cellspacing='0'><tr><th>#</th><th>Sexo</th></tr>";
    foreach ($generos as $index => $sexo) {
        echo "<tr><td>" . ($index + 1) . "</td><td>$sexo</td></tr>";
    }
    echo "</table>";

    echo "<p>Array ([M] => " . $resultado['M'] . " [F] => " . $resultado['F'] . ")</p>";
    ?>
</body>

</html>