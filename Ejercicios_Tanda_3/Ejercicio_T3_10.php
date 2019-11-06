<html>
    <?php
    if(!isset($_POST["numeroUsuaria"]))
    {
        $numeroUsuaria = 0;
        $sumaNumeros = 0;
        $contadorNumeros = 0;
    }
    else
    {
        $numeroUsuaria = $_POST["numeroUsuaria"];
        $sumaNumeros = $_POST["sumaNumeros"];
        $contadorNumeros = $_POST["contadorNumeros"];
    }
    
    if($numeroUsuaria >= 0)
    {
        $sumaNumeros = $sumaNumeros + $numeroUsuaria;
        $contadorNumeros++;
     ?>
     <form action="Ejercicio_T3_10.php" method="post">
        <input type="number" name="numeroUsuaria" autofocus>
        <input type="hidden" name="sumaNumeros" value="<?php echo $sumaNumeros; ?>">
        <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros; ?>">
        <input type="submit" value="Aceptar">
     </form>
     <?php
    }
    else
    {
        echo "La media de los números introducidos es: ", $sumaNumeros / ($contadorNumeros - 1), ".";
        echo "<br><br><a href='Ejercicio_T3_10.php'>Volver</a>";
    }
     ?>   

</html>