<?php
/*
---
title: Ejercicio 1: Mayor de Tres Números.
desc: Mayor de tres números, que estarán almacenados en tres variables de manera aleatoria.
tags: [PHP, if, else, básico]
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
    <title>Ejercicio 8</title>

    <style>
        body {
            font-family: times, 'Times New Roman', serif;
            padding: 1rem;
        }

        h1 {
            color: #303030ff;
        }

        p {
            font-size: 1.05rem;
            padding-left: 5px;
        }

        .numbers {
            padding-left: 30px;
        }
    </style>
</head>

<body>
    <?php
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $num3 = rand(1, 100);

    echo '<h1>Juego: Mayor de tres números</h1>';
    echo "<p class=\"numbers\">• Número 1: <strong>$num1</strong></p>";
    echo "<p class=\"numbers\">• Número 2: <strong>$num2</strong></p>";
    echo "<p class=\"numbers\">• Número 3: <strong>$num3</strong></p>";

    if ($num1 === $num2 && $num2 === $num3) {
        echo "<p>Todos los números son iguales: <strong>$num1</strong></p>";
    } else {
        if ($num1 >= $num2 && $num1 >= $num3) {
            $mayor = $num1;
            $origen = 'variable 1';
        } else if ($num2 >= $num1 && $num2 >= $num3) {
            $mayor = $num2;
            $origen = 'variable 2';
        } else {
            $mayor = $num3;
            $origen = 'variable 3';
        }

        echo "<p>El número mayor es: <strong>$mayor</strong></p>";
    }
    ?>
</body>

</html>