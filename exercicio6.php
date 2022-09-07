<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        Infome o tamanho de um dos lados do quadrado: <input type="text" name="aresta">
        <input type="submit">
    </form>

    <?php
        $aresta= $_GET["aresta"];
        
        $area= $aresta*$aresta;

        echo "A área do quadrado é igual: $area </br>";
        $dobro = $area*2;
        echo "O dobro da área é igual: $dobro";
    
    
    ?>
</body>
</html>