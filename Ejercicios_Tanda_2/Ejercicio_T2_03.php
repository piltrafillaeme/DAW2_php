<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 3 - Tanda 2</title>
</head>
<body>
    <?php 
    $diaNumero = $_POST["diaSemana"];

    switch ($diaNumero)
    {
        case 1:
        echo "LUNES";
        break;
        case 2:
        echo "MARTES";
        break;
        case 3:
        echo "MIÉRCOLES";
        break;
        case 4:
        echo "JUEVES";
        break;
        case 5:
        echo "VIERNES";
        break;
        case 6:
        echo "SÁBADO";
        break;
        case 7:
        echo "DOMINGO";
        break;
    }
    
    
    ?>
</body>
</html>