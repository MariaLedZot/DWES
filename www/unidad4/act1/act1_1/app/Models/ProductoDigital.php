<?php
namespace App\Models;

class ProductoDigital extends Producto {
    private float $tamanoArchivo; // en MB

    public function __construct(string $codigo, float $precio, float $tamanoArchivo) {
        parent::__construct($codigo, $precio);
        $this->tamanoArchivo = $tamanoArchivo;
    }

    public function mostrarResumen(): void {
        echo "Producto Digital [{$this->getCodigo()}] - Precio: {$this->getPrecio()}€, Tamaño: {$this->tamanoArchivo}MB<br>";
    }
}