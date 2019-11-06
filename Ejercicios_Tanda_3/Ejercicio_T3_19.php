<html>
<?php 
if(!isset($_POST["alturaPiramide"]))
{
    ?>
    <form action="Ejercicio_T3_19.php" method="post">
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
        $relleno = $alturaPiramide - $espaciosBlanco;
        
        for($j = 1; $j <= $espaciosBlanco; $j++)
        {
           echo "&nbsp";
        }
    
        for($j = 0; $j < $relleno; $j++)
        {
            echo $figurita;
        }
    
        for($j = 1; $j < $relleno; $j++)
        {
            echo $figurita;
        }
    
        echo "<br>";
    }
    echo "</pre>";
}
?>
</html>