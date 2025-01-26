
<?php
session_start();

// Verificamos que se reciban los datos necesarios
if (!isset($_REQUEST['nombre']) || !isset($_REQUEST['pedido']) || !isset($_REQUEST['cantidad'])) {
    die("Faltan datos para procesar el pedido.");
}

$ar = fopen("pedido.txt", "a") or die("No se pudo crear el archivo");

fputs($ar, "Nombre del cliente: " . $_REQUEST['nombre'] . "\n");
fputs($ar, "Producto solicitado: " . $_REQUEST['pedido'] . "\n");
fputs($ar, "Cantidad: " . $_REQUEST['cantidad'] . "\n");
fputs($ar, "-------------------------------------------\n");

fclose($ar);

// Confirmación para el usuario
echo "El pedido se guardó correctamente en pedido.txt.";
?>
