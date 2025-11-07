<?php
/*
---
title: Ejercicio 1: Gestión de pedidos.
desc: Crear un sistema de gestión de pedidos que permita a los usuarios realizar pedidos de productos físicos y digitales.
tags: [PHP, pedidos, productos, gestión]
code: https://github.com/
---
*/

require_once __DIR__ . '/app/Interfaces/ResumenInterface.php';
require_once __DIR__ . '/app/Models/Producto.php';
require_once __DIR__ . '/app/Models/ProductoFisico.php';
require_once __DIR__ . '/app/Models/ProductoDigital.php';
require_once __DIR__ . '/app/Models/Cliente.php';
require_once __DIR__ . '/app/Models/Pedido.php';

use App\Models\ProductoFisico;
use App\Models\ProductoDigital;
use App\Models\Cliente;
use App\Models\Pedido;

$p1 = new ProductoFisico("PF001", 50, 2.5, 5);
$p2 = new ProductoDigital("PD001", 20, 500);
$p3 = new ProductoFisico("PF002", 100, 5, 10);
$p4 = new ProductoDigital("PD002", 15, 200);

$c1 = new Cliente("María Ledesma Zotano", "maria@ledesma.com");
$c2 = new Cliente("Alberto Ledesma Guerrero", "alberto@ledesma.com");

$pedido1 = new Pedido($c1);
$pedido1->agregarProducto($p1);
$pedido1->agregarProducto($p2);

$pedido2 = new Pedido($c2);
$pedido2->agregarProducto($p3);
$pedido2->agregarProducto($p4);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>

<body>
    <main class="container">
        <h1>🛒 Resumen de Pedidos</h1>
        <div>
            <?php
            $pedido1->mostrarResumen();
            ?>
        </div>
        <div>
            <?php
            $pedido2->mostrarResumen();
            ?>
        </div>
    </main>
</body>

</html>