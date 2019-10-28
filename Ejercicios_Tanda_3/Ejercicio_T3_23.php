<html>
    <?php 
    if(!isset($_POST["numeroUsuaria"]))
    {
        $numeroUsuaria = 0;
        $sumaTotal = 0;
        $contadorNumeros = 0;
    }
    else
    {
        $numeroUsuaria = $_POST["numeroUsuaria"];
        $sumaTotal = $_POST["sumaTotal"];
        $sumaTotal = $sumaTotal + $numeroUsuaria;
        $contadorNumeros = $_POST["contadorNumeros"];
        $contadorNumeros++;
    }
    
    if($sumaTotal < 1000)
    {
    ?>
    <form action="Ejercicio_T3_23.php" method="post">
    <p>Introduzca un número: <input type="number" name="numeroUsuaria" autofocus></p>
    <p><input type="hidden" name="sumaTotal" value="<?php echo $sumaTotal ?>"></p>
    <p><input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros ?>"></p>
    <p><input type="submit" value="Aceptar"></p>
    </form>
    <?php
    }
    else
    {
        echo "Cantidad de números introducidos: ", $contadorNumeros, "<br>";
        echo "Suma total de los números introducidos: ", $sumaTotal, "<br>";
        $media = $sumaTotal / $contadorNumeros;
        echo "Media de los números introducidos: ", $media, "<br>";
    }
    ?>
    
    


</html>