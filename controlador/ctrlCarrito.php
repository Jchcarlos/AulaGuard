<?php
include("../modelo/carrito.php");

// Obtener datos del formulario
$id_usuario = $_GET['id_usuario'];

$carrito = new Carrito();
$carrito->conectorBD();

if (isset($_POST['opcion'])) {
    switch ($_POST['opcion']) {
        case 1:
            $carrito->inicializar($_POST['producto_id'], $_POST['precioUnitario'], $_POST['cantidad'], $id_usuario);
            $carrito->agregarCarrito();
            break;
        case 2:
            $carrito->eliminarProducto($_POST['id_usuario']);
            break;
    }
}
?>