<html>
    <?php
    if(!isset($_POST["numeroUsuaria"]))
    {
        $contadorTotal = 0;
        $contadorNegativos = 0;
        $contadorPositivos = 0;
    }
    else
    {
        $numeroUsuaria = $_POST["numeroUsuaria"];
        $contadorPositivos = $_POST["contadorPositivos"];
        $contadorNegativos = $_POST["contadorNegativos"];
        $contadorTotal = $_POST["contadorTotal"];
        $contadorTotal++;
        if($numeroUsuaria >= 0)
        {
            $contadorPositivos++;
        }
        else
        {
            $contadorNegativos++;
        }
    }

    if($contadorTotal < 10)
    {
        ?>
            <form action="Ejercicio_T3_13.php" method="post">
            <p>Número <input type="number" name="numeroUsuaria" autofocus></p>
            <input type="hidden" name="contadorTotal" value="<?php echo $contadorTotal; ?>">
            <input type="hidden" name="contadorPositivos" value="<?php echo $contadorPositivos; ?>">
            <input type="hidden" name="contadorNegativos" value="<?php echo $contadorNegativos; ?>">
            <input type="submit" value="Aceptar">
          </form>
        <?php
    }
    if($contadorTotal == 10)
    {
        echo "Han sido introducidos ", $contadorPositivos, " números positivos y ", $contadorNegativos, " números negativos.";
    }
    


    
    ?>
    <br>
    <a href="Ejercicio_T3_13.php">>> Volver</a>
</html>