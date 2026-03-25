<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Básicas y Parametros</title>
    <link rel="stylesheet" href="Actividad01.css">
</head>
<body>
    
<h1>Funciones Básicas</h1>  

<ul>
    <li>Función 1</li>
    <?php
    function saludar(){
        print("Hola, mucho gusto");
        echo "Hola, mucho gusto";
    }
    saludar();
    ?>
</ul>

<br>

<ul>
    <li>Función 2</li>
    <?php
    function comida(){
        print("Aquí hay comida");
        echo "Aquí hay comida";
    }
    comida();
    ?>
</ul>

<br>

<ul>
    <li>Función 3</li>
    <?php
    function agua(){
        print ("Aquí hay agua bro");
        echo "Aquí hay agua bro";
    }
    agua();
    ?>
</ul>

<br>

<h1>Funciones con Parámetros</h1>

<ol>
    <li>Función 1</li>
    <?php
    function suma ($a,$b){
    print ($a + $b);
    echo $a + $b;
    }
    suma(8,10)
    ?>
</ol>

<ol>
    <li>Función 2</li>
    <?php
    function por ($i,$y){
        print ($i * $y);
        echo $i * $y;
    }
    por(4,5)
    ?>
</ol>

<ol>
    <li>Función 3</li>
    <?php
    function resta ($t,$e){
        print($t - $e);
        echo $t - $e;
    }
    resta(9,7)
    ?>
</ol>


</body>
</html>