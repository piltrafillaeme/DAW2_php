<html>
    <head>
        <title>Ejercicio 4 -  Tanda 3</title>
    </head>
<!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for. -->

<?php 

for($i = 360; $i >= 160; $i = $i - 20)
{
    if($i != 160)
    {
        echo $i, ", ";
    }
    else
    {
        echo $i;
    }
}

?>
</html>