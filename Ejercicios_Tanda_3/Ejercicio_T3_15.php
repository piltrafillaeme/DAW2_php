<html>
<?php
if(!isset($_POST["base"]) || !isset($_POST["exponente"]))
{
?>
    <form action="Ejercicio_T3_15.php" method="post">
    <p>Base <input type="number" name="base"></p>
    <p>Exponente <input type="number" name="exponente"></p>
    <p><input type="submit" value="Aceptar"></p>
    </form>
<?php
}
else
{
    $base = $_POST["base"];
    $exponente = $_POST["exponente"];
    
    for($i = 1; $i <= $exponente; $i++)
    {
        echo $base, "<sup>", $i, "</sup><br>";
    }
}
?>
</html>