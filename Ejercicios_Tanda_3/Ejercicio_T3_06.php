<html>
    <head>
    <title>Ejercicio 6 -  Tanda 3</title> 
    </head>
<!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while.     -->

<?php 

$i = 360;

do {
    if($i != 160)
    {
        echo $i, ", ";
    }
    else
    {
        echo $i;
    }
    $i = $i - 20;
} while ($i >= 160);
?>
</html>