<html>
<?php 
if(!isset($_POST["numeroUsuaria"]))
{
?>
    <form action="Ejercicio_T3_16.php" method="post">
    <p>Número <input type="number" name="numeroUsuaria"></p>
    <p><input type="submit" value="Aceptar"></p>
    </form>
<?php 
}
else
{
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $primo = true;
    for($i = 2; $i < $numeroUsuaria; $i++)
    {
        if($numeroUsuaria % $i == 0)
        {
            $primo = false;
            $i = $numeroUsuaria;
        }
    }

    if($primo)
    {
        echo "El número introducido es primo.";
    }
    else
    {
        echo "El número introducido no es primo.";
    }
}
?>
</html>