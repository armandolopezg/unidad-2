<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer documento en php</title>
</head>
<body>
    <?php
     $Nombre="Armando";
     $Sexo="Masculino";
     $Direccion="Lago Managua";
     echo "<h1>Practica en php</h1>";
     echo "<br>Nombre: <input type text value='$Nombre' style='position: relative; width: 300px;'>";
     echo "<br>Sexo:   <input type text value='$Sexo' style='position: relative; width: 300px;'>";
     echo "<br>Dirección: <input type text value='$Direccion'style='position: relative; width: 300px;'>";
    ?>
</body>
</html>