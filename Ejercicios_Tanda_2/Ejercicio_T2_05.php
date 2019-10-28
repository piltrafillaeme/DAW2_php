<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5 - Tanda 2</title>
</head>
<body>
    <?php 
    $variableA = $_POST["a"];
    $variableB = $_POST["b"];
    $variableX = (-1 * $variableB) / $variableA;

    if ($variableA == 0)
    {
        echo "Su ecuación no tiene una solución real";
    }
    else
    {
        echo "El valor de x de su ecuación de primer grado es: ", $variableX;
    }

    ?>
</body>
</html>