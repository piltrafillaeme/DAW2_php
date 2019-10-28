<html>
    <?php 
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $numeroDigitos;
    if($numeroUsuaria < 0)
    {
        $numeroUsuaria = -1 * $numeroUsuaria;
    }

    if($numeroUsuaria < 10)
    {
        $numeroDigitos = 1;
    }
    else
    {
        if (( $numeroUsuaria >= 10 ) && ( $numeroUsuaria < 100 ))
        {
            $numeroDigitos = 2;
        }
        else
        {
            if (( $numeroUsuaria >= 100 ) && ( $numeroUsuaria < 1000 ))
            {
                $numeroDigitos = 3;
            }
            else
            {
                if (( $numeroUsuaria >= 1000 ) && ( $numeroUsuaria < 10000 ))
                {
                    $numeroDigitos = 4;
                }
                else
                {
                    $numeroDigitos = 5;
                }
            }
        } 
    }
    echo "El número introducido, ", $numeroUsuaria, " tiene ", $numeroDigitos, " dígito(s).";
    ?>
</html>