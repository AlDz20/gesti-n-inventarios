<?php
include_once('Producto.php');  // Incluye la clase Producto

class Electrodomestico extends Producto {
    private $marca;
    private $modelo;

    // Constructor de la subclase
    public function __construct($nombre, $precio, $cantidad, $marca, $modelo) {
        parent::__construct($nombre, $precio, $cantidad);  // Llamada al constructor de la clase base
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    // Implementación del método abstracto
    public function mostrarDetalles() {
        $impuesto = $this->calcularImpuesto();
        $valorTotal = $this->calcularValorTotal();
        echo "Producto: $this->nombre, Marca: $this->marca, Modelo: $this->modelo, Precio: $this->precio, ";
        echo "Cantidad: $this->cantidad, Impuesto: $impuesto, Valor Total con Impuesto: $valorTotal<br>";
    }
}
?>
