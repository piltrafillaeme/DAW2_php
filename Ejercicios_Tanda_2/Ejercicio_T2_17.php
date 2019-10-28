<html>
    <?php 
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $primeraCifra;

    if($numeroUsuaria < 10)
    {
        $primeraCifra = $numeroUsuaria;
        echo $primeraCifra;
    }
    else
    {
        if (( $numeroUsuaria >= 10 ) && ( $numeroUsuaria < 100 ))
        {
            $primeraCifra = $numeroUsuaria / 10;
        }
        else
        {
            if (( $numeroUsuaria >= 100 ) && ( $numeroUsuaria < 1000 ))
            {
                $primeraCifra = $numeroUsuaria / 100;
            }
            else
            {
                if (( $numeroUsuaria >= 1000 ) && ( $numeroUsuaria < 10000 ))
                {
                    $primeraCifra = $numeroUsuaria / 1000;
                }
                else
                {
                    $primeraCifra = $numeroUsuaria / 10000;
                }
            }
        } 
    }
    echo "La primera cifra es, ", floor($primeraCifra);
    ?>
</html>