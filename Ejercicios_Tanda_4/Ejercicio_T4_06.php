<html>
<!-- Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los pares de un color y los impares de otro. -->
<?php 
if(!isset($_POST["numeroUsuaria"]))
{
    $contador = 1;
    $numerosUsuariaTexto = "";
    $numeroUsuaria = 0;
}
else
{
    $numerosUsuariaTexto = $_POST["numerosUsuariaTexto"];
    $contador = $_POST["contador"];
    $numeroUsuaria = $_POST["numeroUsuaria"];
}
if($contador < 9)
{
    $contador = $_POST["contador"];
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $numerosUsuariaTexto = $_POST["numerosUsuariaTexto"];

    if($numerosUsuariaTexto == "")
    {
        $numerosUsuariaTexto = $numeroUsuaria;
    }
    else
    {
        $numerosUsuariaTexto = $numerosUsuariaTexto." ".$numeroUsuaria;
    }

    $contador++;
}


if(!isset($_POST["numeroUsuaria"]) || $contador < 16){
?>
    <form action="Ejercicio_T4_06.php" method="POST">
        <p>Introduzca un número: <input type="number" name="numeroUsuaria" autofocus></p>
        <p><input type="hidden" name="contador" value="<?php echo $contador; ?>"></p>
        <p><input type="hidden" name="numerosUsuariaTexto" value="<?php echo $numerosUsuariaTexto ?>"></p>
        <p><input type="submit" value="Enviar"></p>
    </form>
<?php
}
    
if($contador == 9)
{
    $arrayNumeros = explode(" ", $numerosUsuariaTexto);
    
     foreach($arrayNumeros as $numeroUsuaria)
     {
         if($numeroUsuaria % 2 == 0)
         {
             echo "<span style='color: green;'>$numeroUsuaria</span>";
         }
         else
         {
             echo "<span style='color: orange;'>$numeroUsuaria</span>";
         }
    }

    /* for($i = 0; $i < sizeof($arrayNumeros); $i++)
    {
        if($arrayNumeros[$i] % 2 == 0)
        {
            echo "<span style='color: green;'>" . $arrayNumeros[$i] . "</span>";
        }
        else{
            echo "<span style='color: orange;'>" . $arrayNumeros[$i] . "</span>";
        }
    } */
}


?>


</html>