<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="gets">
        Digite o primeiro numero: <input type="text" name= "n1"></br>
        Dgite o segundo numero: <input type="text" name="n2"></br>
        <input type="submit">
    </form>
    <?php
        $numero1= $_GET["n1"];
        $numero2= $_GET["n2"];

        $soma= $numero1+$numero2;

        echo "</br>O resultado da soma é: $soma";
        
    ?>
</body>
</html>