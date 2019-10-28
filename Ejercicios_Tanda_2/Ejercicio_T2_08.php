<html>
<?php 
    $notaUno = $_POST["notaUno"];
    $notaDos = $_POST["notaDos"];
    $notaTres = $_POST["notaTres"];
    $notaTotal = $notaUno + $notaDos + $notaTres;
    $media = round(($notaTotal / 3), $precision = 2);
    
    echo "Nota 1: ", $notaUno, "<br>";
    echo "Nota 2: ", $notaDos, "<br>";
    echo "Nota 3: ", $notaTres, "<br>";
    echo "Media: ", $media, ". ";

    if ($media < 5)
    {
        echo "Insuficiente";
    }
    else
    {
        if ($media < 6)
        {
            echo "Aprobado";
        }
        else
        {
            if ($media < 7)
            {
                echo "Bien";
            }
            else
            {
                if ($media < 8)
                {
                    echo "Notable";
                }
                else
                {
                    echo "Sobresaliente";
                }
            }
        }
    }
    

    ?>
</html>