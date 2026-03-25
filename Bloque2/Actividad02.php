<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Indexados y Asociado</title>
    <link rel="stylesheet" href="Actividad02.css">
</head>
<body>

<h1>Indexed Array</h1>

<br>

<p>Ejemplo1</p>

<br>

<?php
$edad = [17,20,36,27,50];
echo $edad[2];
foreach ($edad as $viejo){
    echo $viejo;
}
?>

<br>

<h1>Associative Array</h1>

<br>

<p>Ejemplo1</p>

 <br>

<?php
$Trabajador = [
    "ID" => 1,
    "Nombre" => "Diego",
    "Apellido" => "Vásquez",
    "Edad" => 18,
    "Sueldo" => 1000
];

echo $Trabajador ["Nombre"];
foreach ($Trabajador as $ID){ 
    echo $ID;
}
?>

<br>

<p>Ejemplos extras</p>

<br>

<?php
$codigos = [304,845,798,654];
echo $codigos [3];
foreach ($codigos as $contraseña){
    echo $contraseña;
}
?>

<br>

<?php
$Estudiante = [
    "ID" => 1,
    "Nombre" => "Dereck",
    "Apellido" => "Falla",
    "Edad" => 17,
];

echo $Estudiante ["Nombre"];
foreach ($Estudiante as $ID){ 
    echo $ID;
}
?>

</body>
</html>