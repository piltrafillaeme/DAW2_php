<html>
<?php 
if(!isset($_POST["numeroUsuaria"]))
{
    ?>
    <form action="Ejercicio_T3_17.php" method="post">
    <p>Número <input type="number" min="0" name="numeroUsuaria"></p>
    <p><input type="submit" value="Aceptar"></p>
    </form>
<?php 
}
else
{
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $final = $numeroUsuaria + 100;
    if($numeroUsuaria >= 0)
    {
        $sumaTotal = 0;

        for($i = $numeroUsuaria; $i <= $final; $i++)
        {
            //echo $sumaTotal, " + ", $i, " = ",
            $sumaTotal = $sumaTotal + $i;
            // echo $sumaTotal, "<br>";
        }
    }
    else
    {
        echo "Debe introducir un número positivo.";
    }

    echo "La suma total es: ", $sumaTotal;
}

?>
</html>