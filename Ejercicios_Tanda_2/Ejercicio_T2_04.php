<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4 - Tanda 2</title>
</head>
<body>
    <?php 
    $horasSemana = $_POST["horasSemana"];
    $precioHoraNormal = 12;
    $precioHoraExtra = 16;
    $salarioSemanal;

    if ($horasSemana <= 40)
    {
        $salarioSemanal = $horasSemana * $precioHoraNormal;
        echo "Su salario a la semana es de: ", $salarioSemanal;
    }
    else
    {
        $horasExtra = $horasSemana - 40;
        $salarioSemanal = (40 * $precioHoraNormal) + ($horasExtra * $precioHoraExtra);
        echo "Su salario a la semana es de: ", $salarioSemanal;
    } 
    ?>
</body>
</html>