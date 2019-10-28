<html>
<?php 
// Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla (<table> en HTML).

// $numeroUsuaria = 5;
// $i = 10;
if(!isset($_POST["numeroUsuaria"]))
{
    echo "<form action='Ejercicio_T3_08.php' method='post'>";
    echo "<input type='number' min='1' max='10' name='numeroUsuaria' autofocus>";
    echo "<input type='submit' value='Continuar'>";
    echo "</form>";
}
else
{
    $numeroUsuaria = $_POST["numeroUsuaria"];
    echo "<table style='border-collapse: collapse'>";
    echo "<thead rowspan='2' style ='border:1px solid black; text-align:center'><tr><th>Tabla de Multiplicar</th><th></th></tr></thead>";
    echo "<tbody>";
    for($i = 0; $i <= 10; $i++)
    {
        echo "<tr><td style ='border:1px solid black'>", $numeroUsuaria, " x ", $i, "</td><td style ='border:1px solid black'>", $numeroUsuaria*$i, "</td></tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "<br><br><a href='Ejercicio_T3_08.php'>Volver</a>";
}
?>

</html>