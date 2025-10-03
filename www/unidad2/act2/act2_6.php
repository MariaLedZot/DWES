<?php
/*
---
title: Ejercicio 6: Print_r.
desc: Uso de print_r.
tags: [PHP, basico, print_r, var_dump]
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
    <title>Ejercicio 6</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        p {
            padding-left: 25px;
            color: #961919ff;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    $host = "localhost";  // cadena obligatoria
    $puerto = "3306";     // debería ser entero, pero llega como cadena
    $usuario = "root";    // cadena obligatoria
    $clave = null;        // debería ser cadena, pero está vacía
    $debug = "true";      // debería ser booleano 

    echo "<p>Valores iniciales:</p>";
    print_r([$host, $puerto, $usuario, $clave, $debug]);

    echo "<p>Tipos iniciales:</p>";
    var_dump($host, $puerto, $usuario, $clave, $debug);

    // Correcciones
    settype($puerto, "integer");
    settype($debug, "boolean");
    $clave = $clave ?? "";   // Con el operador ??
    $clave = $clave ?: "";   // con el operador elvis

    echo "<p>Tipos corregidos:</p>";
    var_dump($host, $puerto, $usuario, $clave, $debug);
    ?>
</body>

</html>