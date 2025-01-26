
<?php
session_start();


if (isset($_POST['cantidad'])) {

    $productos = include '../php/productos.php';
    

    $ar = fopen("../pedidos.txt", "a") or die("Problemas en la creación del archivo.");


    foreach ($_POST['cantidad'] as $idProducto => $cantidad) {
        $producto = $productos[$idProducto];
        
        fputs($ar, "Producto: " . $producto['nombre'] . "\n");
        fputs($ar, "Cantidad: " . $cantidad . "\n");
        fputs($ar, "-------------------------------------------\n");
    }

    fclose($ar);

    echo "El pedido se ha realizado correctamente.";
} else {
    echo "No se han recibido productos para pedir.";
}
?>
