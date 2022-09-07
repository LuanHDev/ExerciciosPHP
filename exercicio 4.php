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
        Nota 1: <input type="text" name="n1"></br>
        Nota 2: <input type="text" name="n2"></br>
        Nota 3: <input type="text" name="n3"></br>
        <input type="submit">
    </form>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];

        $media = ($nota1+$nota2+$nota3)/3;

        echo "A media do aluno é: $media";
    
    
    ?>

</body>
</html>