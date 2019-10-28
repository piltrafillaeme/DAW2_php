<html>
    <head>
    <title>Ejercicio 1 -  Tanda 3</title>
    </head>
    <!-- Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for .    -->
    <?php
    $arrayMultiplos = array();
    $contador = 0;

    for($i = 0; $i <= 100; $i++)
    {
        if($i % 5 == 0)
        {
            $arrayMultiplos[$contador] = $i;
            $contador++;
        }
    }

    // print_r($arrayMultiplos);
    echo "Los múltiplos de 5 son:<br>";
    for($i = 0; $i < sizeof($arrayMultiplos); $i++)
    {
        if($i == sizeof($arrayMultiplos)-1)
        {
            echo $arrayMultiplos[$i], ".";
        }
        else
        {
            echo $arrayMultiplos[$i], ", ";
        }
    }

    ?>
</html>