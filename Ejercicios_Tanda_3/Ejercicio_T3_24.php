<html>
<?php 
if(!isset($_POST["alturaPiramide"]))
{
    ?>
    <form action="Ejercicio_T3_24.php" method="post">
    <p>Altura Pirámide <input type="number" name="alturaPiramide" autofocus></p>
    <p><input type="submit" value="Aceptar"></p>
    </form>
<?php 
}
else
{
    $alturaPiramide = $_POST["alturaPiramide"];
    echo "<pre>";
    for($i = 1; $i <= $alturaPiramide; $i++)
    {
        $espaciosBlanco = $alturaPiramide - $i;

        for($j = 1; $j <= $espaciosBlanco; $j++)
        {
            echo "&nbsp";
        }

        for($k = 1; $k <= $i; $k++)
        {
            echo $k;
        }

        for($k = $i - 1; $k >= 1; $k--)
        {
            echo $k;
        }
        echo "<br>";
    }
    echo "</pre>";
}
?>
</html>