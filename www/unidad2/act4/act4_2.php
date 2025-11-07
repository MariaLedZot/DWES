<?php
/*
---
title: Ejercicio 2: Listado de Personas.
desc: Script PHP que utiliza un array bidimensional para almacenar nombre, altura y email de varias personas, y muestra estos datos en una tabla HTML mediante un bucle foreach.
tags: [PHP, array bidimensional, foreach, echo, HTML]
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
    $personas = [
        ['nombre' => 'Fede', 'altura' => 1.93, 'email' => 'fede@correo.com'],
        ['nombre' => 'Ana', 'altura' => 1.65, 'email' => 'ana@correo.com'],
        ['nombre' => 'Luis', 'altura' => 1.72, 'email' => 'luis@correo.com']
    ];

    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Nombre</th><th>Altura</th><th>Email</th></tr>";

    foreach ($personas as $persona) {
        echo "<tr>";
        echo "<td>" . $persona['nombre'] . "</td>";
        echo "<td>" . $persona['altura'] . "</td>";
        echo "<td>" . $persona['email'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>

</html>