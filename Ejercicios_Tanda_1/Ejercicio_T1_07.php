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
    $baseImponible = $_POST["baseImponible"];
    $iva = $_POST["tipoIva"];
    $resultado = (($iva / 100) * $baseImponible) + $baseImponible;

    echo "El total de la factura es: ", $resultado;
    
    
    ?>
</body>
</html>