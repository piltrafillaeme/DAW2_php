<html>
    <?php 
    if(!isset($_POST["numeroUsuaria"]))
    {
    ?>
        <form action="Ejercicio_T3_26.php" method="post">
        <p>Introduzca un número: <input type="number" name="numeroUsuaria" autofocus></p>
        <p>Introduzca un dígito: <input type="number" name="digito"></p>
        <p><input type="submit" value="Aceptar"></p>
        </form>
    <?php 
    }
    else
    {
        $numeroUsuaria = $_POST["numeroUsuaria"];
        $digito = $_POST["digito"];
        $numeroUsuariaTexto = (string)$numeroUsuaria;
        $posicionDigito = strpos($numeroUsuariaTexto, $digito);

        if($posicionDigito)
        {
            echo "El dígito se encuentra en la posición ", $posicionDigito + 1, " dentro del número introducido." ;
        }
        else
        {
            echo "Ese dígito no se encuentra en el número introducido.";
        }
    }
    
    ?>
</html>