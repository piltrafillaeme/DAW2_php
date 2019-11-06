<html>
    <?php 
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $numerosCadena = (string)$numeroUsuaria;
    
    $arrayNormal = str_split($numerosCadena);
    $arrayReverse = array_reverse($arrayNormal);
    
    print_r($arrayNormal);
    print_r($arrayReverse);

    $capicua = true;

    for($i = 0; $i < sizeof($arrayNormal); $i++)
    {
        if($arrayNormal[$i] != $arrayReverse[$i])
        {
            $capicua = false;
            $i = sizeof($arrayNormal);
        }
    }

    if($capicua)
    {
        echo "Es capicua";
    }
    else
    {
        echo "No es capicua";
    }
    ?>
</html>