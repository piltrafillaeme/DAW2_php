<html>
    <?php
    if(!isset($_POST["numeroUsuaria"]))
    {
    ?>
        <form action="Ejercicio_T3_25.php" method="post">
        <p>Introduzca un número: <input type="number" name="numeroUsuaria" autofocus></p>
        <p><input type="submit" value="Aceptar"></p>
        </form>
    <?php 
    }
    else
    {
        $numeroUsuaria = $_POST["numeroUsuaria"];
        $numeroUsuariaTexto = (string)$numeroUsuaria;

        // echo gettype($numeroUsuariaTexto);
        $numeroUsuariaTexto = strrev($numeroUsuariaTexto);
    
        echo $numeroUsuariaTexto;
    }

   
    ?>
</html>