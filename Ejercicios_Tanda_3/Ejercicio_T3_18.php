<html>
<?php 
if(!isset($_POST["primerNumero"]))
{
    ?>
    <form action="Ejercicio_T3_18.php" method="post">
    <p>Primer número <input type="number" name="primerNumero"></p>
    <p>Segundo número <input type="number" name="segundoNumero"></p>
    <p><input type="submit" value="Aceptar"></p>
    </form>
<?php 
}
else
{
    if($_POST["primerNumero"] < $_POST["segundoNumero"])
    {
        $pequeno = $_POST["primerNumero"];
        $grande = $_POST["segundoNumero"];
    }
    else
    {
        $pequeno = $_POST["segundoNumero"];
        $grande = $_POST["primerNumero"];
    }

    $array = array();
    $j = 0;
    for($i = $pequeno; $i <= $grande; $i = $i + 7)
    {
        $array[$j] = $i;
        //echo $i, " - ";
        $j++;
    }
    //print_r($array);

    for($i = 0; $i < sizeof($array); $i++)
    {
        if($i == sizeof($array) - 1)
        {
            echo $array[$i];
        }
        else
        {
            echo $array[$i], " - ";
        }

    }
}
?>
</html>