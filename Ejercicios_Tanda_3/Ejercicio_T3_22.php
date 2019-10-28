<html>
    <?php
    $arrayPrimos = array();
    $indiceArray = 0;
    $numero = 2;
    
    while($numero <= 100)
    {
        $contador = 0;
        for($j = 1; $j <= $numero; $j++)
        {
            if($numero % $j == 0)
            {
                $contador++;
            }
        }

        if($contador == 2)
        {
            $arrayPrimos[$indiceArray] = $numero;
            $indiceArray++;
        }
        $numero++;
    }

    for ($i = 0; $i < sizeof($arrayPrimos); $i++)
    {
        if($i == sizeof($arrayPrimos) - 1)
        {
            echo $arrayPrimos[$i];
        }
        else
        {
            echo $arrayPrimos[$i], ", ";
        }
    }
    ?>
</html>