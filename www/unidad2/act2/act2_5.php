<?php
/*
---
title: Ejercicio 5: Precedencia de operadores.
desc: Uso precedencia de operadores.
tags: [PHP, basico, precedencia]
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
    <title>Ejercicio 5</title>

    <style>
        h2 {
            color: #5a5a5aff;
            font-weight: bold;
        }

        h3 {
            color: #86c979ff;
            padding-left: 10px;
            text-decoration: wavy underline;
        }

        h4 {
            color: #838383ff;
            padding-left: 20px;
            text-decoration: underline;
            font-size: large;
        }

        p {
            padding-left: 25px;
        }
    </style>
</head>

<body>
    <?php
    $resultado = (3 + 5) * 2 < 20 && 4 === "4" || 7 % 2 == 1;
    var_dump($resultado);
    ?>
    <h2>
        Explicación: (3 + 5) * 2 < 20 && 4 === "4" || 7 % 2 == 1 → true.
    </h2>
    <h4>
        (3 + 5) * 2 < 20
    </h4>
    <p>
        3 + 5 = 8;
        8 * 2 = 16;
        16 < 20 → true.
    </p>
    <h4>
        4 === "4"
    </h4>
    <p>
        4 === "4" → false (no son del mismo tipo).
    </p>
    <h4>
        true && false
    </h4>
    <p>
        true && false → false.
    </p>
    <h4>
        7 % 2 == 1
    </h4>
    <p>
        7 % 2 = 1;
        1 == 1 → true.
    </p>
    <h4>
        false || true
    </h4>
    <p>
        false || true → true.
    </p>
    <h3>
        Resultado final: true.
    </h3>
</body>

</html>