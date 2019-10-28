<html>
    <?php
    if(!isset($_POST["numeroUsuaria"]))
    {
        echo "<form action='Ejercicio_T3_09.php' method='post'>";
        echo "<input type='number' min='0' name='numeroUsuaria' autofocus>";
        echo "<input type='submit' value='Continuar'>";
        echo "</form>";
    }
    else
    {
        $numeroUsuaria = $_POST["numeroUsuaria"];
        $numeroUsuariaCadena = (string)$numeroUsuaria;
        $arrayDigitos = str_split($numeroUsuariaCadena);
        echo "El número introducido, ", $numeroUsuariaCadena, ", tiene ", sizeof($arrayDigitos), " dígitos.";
        echo "<br><br><a href='Ejercicio_T3_09.php'>Volver</a>";
    }

    // OTRA FORMA DE HACERLO:
    // $n = $_POST['n'];

    //       $numeroIntroducido = $n;
    //       $numeroDeDigitos = 1;

    //       while ($n > 9) {
    //         $n = floor($n / 10);
    //         $numeroDeDigitos++;
    //       }

    //       echo "$numeroIntroducido tiene $numeroDeDigitos dígito/s.";
    ?>
</html>