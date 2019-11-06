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
$horasDia = $_POST["horasDia"];
$diasSemana = $_POST["diasSemana"];
$salarioDiario = $horasDia * 12;
$salarioSemanal = $salarioDiario * $diasSemana;

echo "Su salario semanal es de: ", $salarioSemanal, " euros." 

?>
</body>
</html>