<?php
if (isset($_POST['monto'])){
    echo "Si hay monto a cobrar<br>";
    
    $monto = $_POST['monto'];
    $produc = "";
    // Validación según los rangos de la imagen
    if ($monto > 300 && $monto < 500) {
        // Descuento del 42%
        $produc = "Como la compra fue mayor a 300 se le aplica el descuento del 42%";
        echo "El monto total a pagar con descuento es: " . ($monto - ($monto * 0.42)) . ($produc);
    } elseif ($monto > 80 && $monto < 200) {
        // Descuento del 25%
        $produc = "Como la compra fue mayor a 80 se le aplica el descuento del 25%";
        echo "El monto total a pagar con descuento es: " . ($monto - ($monto * 0.25)) . ($produc);
    } elseif ($monto > 30 && $monto <= 79) {
        // Descuento del 10%
        $produc = "Como la compra fue mayor a 30 se le aplica el descuenti del 10%";
        echo "El monto total a pagar con descuento es: " . ($monto - ($monto * 0.10)) . ($produc);
    } else {
        echo "No aplica descuento";
    }
} 

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PequeCesar Registrado</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    
</body>
</html>
