<?php
/*
---
title: Ejercicio 4: Partes de un email y enmascarado del usuario.
desc: Separa usuario y dominio con strpos+substr; enmascara el usuario dejando visible primera y última letra.
tags: [PHP, strpos, substr, strlen]
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
        $email = "mledzot325@g.educaand.es";
        list($usuario, $dominio) = explode("@", $email);

        $usuarioEnmascarado = $usuario;
        if (strlen($usuario) >= 3) {
            $usuarioEnmascarado = $usuario[0] . str_repeat("*", strlen($usuario) - 2) . $usuario[strlen($usuario) - 1];
        }

        echo "<strong>Email</strong>: $email<br>";
        echo "<strong>Usuario</strong>: $usuario<br>";
        echo "<strong>Dominio</strong>: $dominio<br>";
        echo "<strong>Usuario enmascarado</strong>: $usuarioEnmascarado";
        ?>
    </body>

</html>