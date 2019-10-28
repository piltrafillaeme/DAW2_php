<?php 
function esPrimo($numero)
{
    $primo = true;
    $contador = 0;
    for($i = 1; $i <= $numero; $i++)
    {
        if($numero % $i == 0)
        {
            $contador++;
        }
    }

    if($contador != 2)
    {
        $primo = false;
    }

    return $primo;
}

for($i = 1; $i <= 1000; $i++) {

    if($i == 1000) {
        if(esPrimo($i)) {
            echo $i;
        }
    }
    else{
        if(esPrimo($i)) {
            echo $i.", ";
        }
    }

}
?>