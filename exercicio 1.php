<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perimetro e raio de um circulo</title>
</head>
<body>
    
<!--Escreva um script que pede o raio de um círculo
e em seguida exiba o perímetro e área do círculo.-->

<form method="get">
    Qual o raio do circulo: <input type="text" name="raio">
    <input type="submit">
</form>
    
<?php
    $raio = $_GET["raio"];
    
    $area = ($raio*$raio) * M_PI;
    $perimetro = (2*M_PI) * $raio;

    echo "O perimetro do circulo é: $perimetro e a área é: $area";
?>
</body>
</html>