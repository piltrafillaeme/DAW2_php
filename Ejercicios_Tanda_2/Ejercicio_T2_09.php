<html>
<?php 
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$potencia = pow($b, 2);

$raizCuadrada = sqrt($potencia - 4*$a*$c);

$resultadoSuma = (-$b + $raizCuadrada)/(2*$a);
$resultadoResta = (-$b - $raizCuadrada)/(2*$a);
/* $resultadoSuma = round((-$b + (sqrt(pow($b, 2) - 4*$a*$c)))/(2*$a), $precision = 2);
$resultadoResta = round((-$b - (sqrt(pow($b, 2) - 4*$a*$c)))/(2*$a), $precision = 2); */

if($a == 0)
{
    echo "Su ecuación no tiene una solución real";
}
else
{
    echo "Los dos posibles valores de x de su ecuación de segundo grado son: ", $resultadoSuma, " y ", $resultadoResta;
}

?>

</html>