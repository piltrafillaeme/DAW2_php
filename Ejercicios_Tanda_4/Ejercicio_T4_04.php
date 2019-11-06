<html>
<!-- Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla separados por espacios.
El programa pedirá entonces por teclado dos valores y a continuación cambiará todas las ocurrencias del primer valor por el
segundo en la lista generada anteriormente. Los números que se han cambiado deben aparecer resaltados de un color diferente. -->
<?php
if(!isset($_POST["numeroViejo"]))
{
    for($i = 0; $i < 100; $i++)
    {
        $arrayAleatorio[$i] = rand(0,20);
        echo "<span style='color: blue;'>" . $arrayAleatorio[$i] . "</span> ";
    }

    $arrayAleatorioTexto = implode(" ", $arrayAleatorio);
?>
    <form action="Ejercicio_T4_04.php" method="POST">
        <p>Introduzca un número del 0 al 20: <input type="number" min="0" max="20" name="numeroViejo" autofocus></p>
        <p>Introduzca el número por el que quiere sustituir el anterior: <input type="number" name="numeroNuevo"></p>
        <p><input type="hidden" name="arrayAleatorioTexto" value="<?php echo $arrayAleatorioTexto; ?>"></p>
        <input type="submit" value="Cambiar">
    </form>
<?php
}
else
{
    $arrayAleatorioTexto = $_POST["arrayAleatorioTexto"];
    $numeroViejo = $_POST["numeroViejo"];
    $numeroSustituto = $_POST["numeroNuevo"];

    $arrayAleatorio = explode(" ",$arrayAleatorioTexto);

    foreach ($arrayAleatorio as $valorActualIteracion){
        if ($valorActualIteracion == $numeroViejo)
        {
            echo "<span style='color: red;'>" . $numeroSustituto . "</span> ";
        }
        else
        {
            echo "<span style='color: blue;'>" . $valorActualIteracion . "</span> ";   
        }
    }

}

?>

</html>