<?php
// Clase abstracta Producto
abstract class Producto {
    protected $nombre;
    protected $precio;
    protected $cantidad;
    protected $impuesto = 0.18;  // 18% de impuesto

    // Constructor
    public function __construct($nombre, $precio, $cantidad) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    // Método abstracto que deben implementar las subclases
    abstract public function mostrarDetalles();

    // Método para calcular el impuesto
    public function calcularImpuesto() {
        return $this->precio * $this->impuesto;
    }

    // Método para calcular el valor total con impuestos
    public function calcularValorTotal() {
        return $this->precio + $this->calcularImpuesto();
    }

    // Método estático para obtener la cantidad total de productos
    public static function obtenerCantidadTotal($productos) {
        $totalCantidad = 0;
        foreach ($productos as $producto) {
            $totalCantidad += $producto->cantidad;
        }
        return $totalCantidad;
    }
}
?>
