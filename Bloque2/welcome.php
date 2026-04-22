
<!--- Para recibir la info --->

<?php
if (isset($_POST['monto'])){
    echo "Si hay monto a cobrar";
}

if ($_POST['monto'] >= 30){
    echo "El monto total a pagar con descuento es: " . $_POST['monto'] * 0.10;
} else {
    echo "No aplica descuento del 10%";
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
