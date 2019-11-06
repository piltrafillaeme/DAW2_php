<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6 - Tanda 2</title>
</head>
<body>
    <?php 
    $altura = $_POST["altura"];
    $gravedad = 9.81;
    $tiempo = sqrt((2 * $altura)/$gravedad);

    echo "El objeto tarda en caer ", round($tiempo, $precision = 2), " segundos.";
    
    ?>
</body>
</html>