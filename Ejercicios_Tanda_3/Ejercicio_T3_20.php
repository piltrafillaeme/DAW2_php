<html>
<?php 
if(!isset($_POST["alturaPiramide"]))
{
    ?>
    <form action="Ejercicio_T3_20.php" method="post">
    <p>Altura Pirámide <input type="number" name="alturaPiramide" autofocus></p>
    <p>Figura con la que dibujar la pirámide: <input type="text" name="figurita"></p>
    <p><input type="submit" value="Aceptar"></p>
    </form>
<?php 
}
else
{
    $alturaPiramide = $_POST["alturaPiramide"];
    $figurita = $_POST["figurita"];
    echo "<pre>";
    for($i = 1; $i <= $alturaPiramide; $i++)
    {
        $espaciosBlanco = $alturaPiramide - $i;
        
        for($j = 1; $j <= $espaciosBlanco; $j++)
        {
            echo "&nbsp";
        }

        //la linea base de la pirámide debe ir entera dibujada:
        if ($i == $alturaPiramide)
        {
            for($k = 1; $k <= ($alturaPiramide * 2) - 1; $k++)
            {
                echo $figurita;
            }
        }
        else
        {
            //ahora solo dibujaré el primer y último elemento:
            for($k = 1; $k <= ($i * 2) - 1; $k++)
            {
                if($k == 1 || $k == ($i * 2) - 1)
                {
                    echo $figurita;
                }
                else
                {
                    echo "Z";
                }
            }
        }
        echo "<br>";
    }
    echo "</pre>";
}
?>
</html>