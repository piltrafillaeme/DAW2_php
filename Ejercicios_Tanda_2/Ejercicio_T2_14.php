<html>
    <?php 
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $par = false;
    $divisibleCinco = false;

    if($numeroUsuaria % 2 == 0)
    {
        $par = true;
    }

    if($numeroUsuaria % 5 == 0)
    {
        $divisibleCinco = true;
    }
    
    if($divisibleCinco && $par)
    {
        echo $numeroUsuaria, " es un número par y además divisible entre 5.";
    }
    else
    {
        if($divisibleCinco)
        {
            echo $numeroUsuaria, " es un número divisible entre 5.";
        }
        else
        {
            if($par)
            {
                echo $numeroUsuaria, " es un número par.";
            }
            else
            {
                echo $numeroUsuaria, " no es un número par y además NO es divisible entre 5.";
            }
        }
    }

    ?>
</html>