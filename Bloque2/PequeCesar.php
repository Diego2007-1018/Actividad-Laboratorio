<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="PequeCesar.css">
    <title>Curso de PHP - 5to Laboratorio</title>
</head>
<body>
    <header>
        <h1>Little Caesars</h1>
    </header>

<p></p>

<div>
    <!-- Formulario -->
     <form  id = "formulario" action="welcome.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" ><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" placeholder="Ingrese su apellido" ><br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Ingrese su email"><br><br>

        <label for="Contraseña">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Ingrese su contraseña"><br><br>

        <input type ="Submit">

</form>

</div>

    <script src = "../Bloque2/pequecesar.js"></script>

</body>
</html>

<!-- para que funcione el formulario -->
<?php
 if (isset ($_Post ["nombre"])){
    echo "Hola" . $_Post ["nombre"];
 }
?>


<?php
 if (isset ($_Post ["apellido"])){
    echo "" . $_Post ["apellido"];
 }
?>


<?php
 if (isset ($_Post ["email"])){
    echo "Su imail fue aceptada" . $_Post ["email"];
 }
?>


<?php
 if (isset ($_Post ["password"])){
    echo "Su contraseña fue aceptada" . $_Post ["password"];
 }
?>

