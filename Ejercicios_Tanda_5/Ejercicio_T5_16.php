<html>
<!-- Muestra los números capicúa que hay entre 1 y 99999. -->

<?php
function capicua()
{
    $arrayCapicua = array();
    for($i = 1; $i <= 99999; $i++)
    {
        $numeroCadena = (string)$i;
        $numeroCadenaReverse = strrev($numeroCadena);
        if($numeroCadena === $numeroCadenaReverse)
        {
            array_push($arrayCapicua,$i);
        }
    }

    return $arrayCapicua;
}

var_dump(capicua());
?>
</html>