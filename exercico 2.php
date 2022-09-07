<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Digite um numero e exiba a mensagem o numero infomado foi-->
    <form method="get">
        Digite um número: <input type="text" name="n" > 
        <input type= "submit"> 
    </form>

    <?php
        $numero = $_GET["n"];
        echo "</br> O numero informado foi: $numero";    
    ?>
</body>
</html>