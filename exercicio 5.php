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
        Ensira o valor em metros: <input type="text" name="metros">
        <input type="submit">
    </form>

    <?php
        $metro= $_GET["metros"];
        $centimetro= $metro*100;

        echo "O valor em centimetro é: $centimetro"

    
    ?>
</body>
</html>