<?php
namespace App\Models;

use App\Interfaces\ResumenInterface;

class Pedido implements ResumenInterface {
    private Cliente $cliente;
    private array $productos = [];

    public function __construct(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function agregarProducto(Producto $p): void {
        $this->productos[] = $p;
    }

    public function mostrarResumen(): void {
        echo "<h3>Pedido de {$this->cliente->getNombre()} ({$this->cliente->getEmail()})</h3>";
        $total = 0;
        foreach ($this->productos as $producto) {
            $producto->mostrarResumen();
            if ($producto instanceof ProductoFisico) {
                $total += $producto->getCostoTotal();
            } else {
                $total += $producto->getPrecio();
            }
        }
        echo "<strong>Total: {$total}€</strong><br><br>";
    }
}