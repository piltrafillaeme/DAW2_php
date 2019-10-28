<html>
    <?php
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $ultimaCifra;

    if($numeroUsuaria < 10)
    {
        $ultimaCifra = $numeroUsuaria;
        echo $ultimaCifra;
    }
    else
    {
        $ultimaCifra = $numeroUsuaria % 10;
    }
    echo "La última cifra es, ", $ultimaCifra; 
    ?>
</html>