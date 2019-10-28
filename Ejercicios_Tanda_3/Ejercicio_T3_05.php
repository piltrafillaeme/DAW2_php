<html>
    <head>
    <title>Ejercicio 5 -  Tanda 3</title>
    </head>
<!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while. -->

<?php 
$i = 360;

while($i >= 160)
{
    if($i != 160)
    {
        echo $i, ", ";
    }
    else
    {
        echo $i;
    }
    $i = $i - 20;
}
?>
</html>