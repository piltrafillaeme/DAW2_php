<html>

<?php 
if(!isset($_POST["base"]))
{
?>
<form action="Ejercicio_T3_14.php" method="post">
<p>Introduzca el número base: <input type="number" name="base"></p>
<p>Introduzca el número exponente: <input type="number" name="exponente"></p>
<p><input type="submit" value="Aceptar"></p>
</form>
<?php
}
else
{
    $base = $_POST["base"];
    $exponente = $_POST["exponente"];
    $potencia = pow($base, $exponente);
    echo "El resultado de ", $base, " elevado a ", $exponente, " es: ", $potencia, ".";
}

?>
<br><br>
<a href="Ejercicio_T3_14.php">Volver</a>
</html>