<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $radioCono = $_POST["radio"];
    $alturaCono = $_POST["altura"];
    $volumenCono = (1/3) * 3.1416 * ($radioCono*$radioCono) * $alturaCono;

    echo "El volumen de un cono con un radio de ", $radioCono, " centímetros y una altura de ", $alturaCono, " centímetros es: ", round($volumenCono, $precision = 2), " cm<sup>3</sup>";

    
    
    ?>
</body>
</html>