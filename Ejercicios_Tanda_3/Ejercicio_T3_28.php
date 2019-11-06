<html>
<?php
if(!isset($_POST["numeroUsuaria"]))
{
?>
    <form action="Ejercicio_T3_28.php" method="post">
    <p>Introduzca un número para calcular su factorial: <input type="number" name="numeroUsuaria" autofocus></p>
    <p><input type="submit" value="Aceptar"></p>
    </form>
<?php    
}
else
{
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $factorial = 1;
    for($i = 1; $i <= $numeroUsuaria; $i++)
    {
        $factorial = $factorial * $i;
    }

    echo "El factorial de ", $numeroUsuaria, " es: ", $factorial;
}
?>
</html>