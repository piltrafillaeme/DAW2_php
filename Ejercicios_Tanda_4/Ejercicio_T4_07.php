<html>
<!-- Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que 
los almacene en un array. El programa debe ser capaz de pasar todos los números 
pares a las primeras posiciones del array (del 0 en adelante) y todos los números 
impares a las celdas restantes. Utiliza arrays auxiliares si es necesario. -->
<?php
$arrayAleatorio = array();
for($i = 0; $i < 5; $i++)
{
    $arrayAleatorio[$i] = rand(0,100);
}
print_r($arrayAleatorio);
echo "<br>";
$arrayPares = array();
$arrayImpares = array();
$limite = sizeof($arrayAleatorio);

for($i = 0; $i < $limite; $i++)
{
    if($arrayAleatorio[$i] % 2 == 0)
    {
        array_push($arrayPares, $arrayAleatorio[$i]);
    }
    else
    {
        array_push($arrayImpares, $arrayAleatorio[$i]);
    }
    unset($arrayAleatorio[$i]);
}

print_r($arrayAleatorio);

$arrayAleatorio = array_merge($arrayPares, $arrayImpares);

echo "<br>";
print_r($arrayAleatorio);
echo "<br>";
print_r($arrayPares);
echo "<br>";
print_r($arrayImpares);
?>
</html>