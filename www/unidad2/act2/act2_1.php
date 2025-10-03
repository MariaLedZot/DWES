<?php
/*
---
title: Ejercicio 1: Comparaciones.
desc: Comparaciones verdaderas de $a=1.
tags: [PHP, basico, operadores]
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
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    echo '• “2" == $a: Esta comparación es falsa porque 2 no es igual a 1.';
    echo '<br>• $a == false: Esta comparación es falsa porque 1 no es igual a 0.';
    echo '<br>• $a == 2: Esta comparación es falsa porque 1 no es igual a 2.';
    echo '<br>• --$a == false : Esta comparación es verdadera porque --$a decrementa $a a 0 y 0 es igual a false.';
    ?>
</body>

</html>