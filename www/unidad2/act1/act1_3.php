<?php
/*
---
title: Ejercicio 3: Tabla datos.
desc: Almacenar datos y hacer una tabla.
tags: [PHP, basico, tabla]
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
        table {
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px 15px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td:first-child {
            font-weight: bold;
            background-color: #f0f0f0;
            width: 30%;
        }
    </style>
</head>

<body>
    <?php
    $nombre = "María";
    $apellido1 = "Ledesma";
    $apellido2 = "Zotano";
    $email = "mledzot325@g.educaand.es";
    ?>

    <table border="1">
        <tr>
            <td>Nombre</td>
            <td> <?php echo "$nombre" ?> </td>
        </tr>
        <tr>
            <td>Primer apellido</td>
            <td> <?php echo "$apellido1" ?> </td>
        </tr>
        <tr>
            <td>Segundo apellido</td>
            <td> <?php echo "$apellido2" ?> </td>
        <tr>
            <td>Email</td>
            <td> <?php echo "$email" ?> </td>
        </tr>
    </table>
</body>

</html>