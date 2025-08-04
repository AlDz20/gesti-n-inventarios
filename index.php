<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
// Incluye las clases necesarias
include_once('Electrodomestico.php');

// Crear objetos de productos electrodomésticos
$producto1 = new Electrodomestico("Lavadora Samsung", 1200, 15, "Samsung", "WW90J5456MW");
$producto2 = new Electrodomestico("Refrigerador LG", 900, 10, "LG", "GR-X247CSAV");
$producto3 = new Electrodomestico("Microondas Whirlpool", 200, 25, "Whirlpool", "MWG1535I");

$productos = [$producto1, $producto2, $producto3];

// Mostrar los detalles de cada producto
foreach ($productos as $producto) {
    $producto->mostrarDetalles();
}

// Calcular la cantidad total de productos
$totalCantidad = Producto::obtenerCantidadTotal($productos);
echo "Cantidad total de productos: $totalCantidad";
?>
