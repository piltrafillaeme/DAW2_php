<html>
    <?php 
    $numeroUno = $_POST["numeroUno"];
    $numeroDos = $_POST["numeroDos"];
    $numeroTres = $_POST["numeroTres"];
    $mayor;
    $mediano;
    $pequeno;

    if ($numeroUno < $numeroDos && $numeroDos < $numeroTres)
    {
        $mayor = $numeroTres;
        $mediano = $numeroDos;
        $pequeno = $numeroUno;
    }
    else
    {
        if ($numeroDos < $numeroUno && $numeroUno < $numeroTres)
        {
            $mayor = $numeroTres;
            $mediano = $numeroUno;
            $pequeno = $numeroDos;
        }
        else
        {
            if ($numeroTres < $numeroDos && $numeroDos < $numeroUno)
            {
                $mayor = $numeroUno;
                $mediano = $numeroDos;
                $pequeno = $numeroTres;
            }
            else
            {
                if ($numeroDos < $numeroTres && $numeroTres < $numeroUno)
                {
                    $mayor = $numeroUno;
                    $mediano = $numeroTres;
                    $pequeno = $numeroDos;
                }
                else
                {
                    if ($numeroUno < $numeroTres && $numeroTres < $numeroDos)
                    {
                        $mayor = $numeroDos;
                        $mediano = $numeroTres;
                        $pequeno = $numeroUno;
                    }
                    else
                    {
                        $mayor = $numeroDos;
                        $mediano = $numeroUno;
                        $pequeno = $numeroTres;
                    }
                }
            }
        }
    }

    echo "Los números introducidos ordenados de menor a mayor son: ", $pequeno, " - ", $mediano, " - ", $mayor, ".";
     ?>
</html>