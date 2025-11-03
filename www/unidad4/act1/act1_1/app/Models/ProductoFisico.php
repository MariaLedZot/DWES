<?php
namespace App\Models;

class ProductoFisico extends Producto {
    private float $peso;
    private float $costoEnvio;

    public function __construct(string $codigo, float $precio, float $peso, float $costoEnvio) {
        parent::__construct($codigo, $precio);
        $this->peso = $peso;
        $this->costoEnvio = $costoEnvio;
    }

    public function mostrarResumen(): void {
        echo "Producto Físico [{$this->getCodigo()}] - Precio: {$this->getPrecio()}€, Peso: {$this->peso}kg, Envío: {$this->costoEnvio}€<br>";
    }

    public function getCostoTotal(): float {
        return $this->getPrecio() + $this->costoEnvio;
    }
}