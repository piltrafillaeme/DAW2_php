<html>
<?php
if(!isset($_POST["numeroUsuaria"]))
{
?>
    <form action="Ejercicio_T3_27.php" method="post">
    <p>Introduzca un número: <input type="number" name="numeroUsuaria" autofocus></p>
    <p><input type="submit" value="Aceptar"></p>
    </form>
<?php    
}
else
{
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $contador = 0;
    $sumaTotal = 0;
    for($i = 1; $i <= $numeroUsuaria; $i++)
    {
        if($i % 3 == 0)
        {
            $sumaTotal = $sumaTotal + $i;
            $contador++;
        }
    }

    echo "Del total de números, hay ", $contador, " que son múltiplos de tres.<br>";
    echo "La suma total de los números múltiplos de 3 es: ", $sumaTotal;
    
}
?>
</html>