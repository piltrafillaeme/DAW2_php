<html>
<!-- Realiza un programa que pida 10 números por teclado y que los almacene en un array.
A continuación se mostrará el contenido de ese array junto al índice (0 – 9) 
utilizando para ello una tabla. Seguidamente el programa pasará los primos a las 
primeras posiciones, desplazando el resto de números (los que no son primos) de 
tal forma que no se pierda ninguno. Al final se debe mostrar el array resultante.  -->
<?php
function esPrimo($numero)
{
    $primo = true;
    $contador = 0;
    for($i = 1; $i <= $numero; $i++)
    {
        if($numero % $i == 0)
        {
            $contador++;
        }
    }

    if($contador != 2)
    {
        $primo = false;
    }

    return $primo;
}

$array = array();
if(!isset($_POST["numeroUsuaria"]))
{
    $contador = 0;
    $numerosUsuariaTexto = "";
    $numeroUsuaria = "";
}
else{
    $contador = $_POST["contador"];
    $numerosUsuariaTexto = $_POST["numerosTexto"];
    $numeroUsuaria = $_POST["numeroUsuaria"];
}

if($contador == 10)
{
    $numerosUsuariaTexto = $numerosUsuariaTexto." ". $numeroUsuaria;
    $numerosUsuariaTexto = substr($numerosUsuariaTexto, 2);
    $array = explode(" ", $numerosUsuariaTexto);
    
    // var_dump($array);

?>
<table style="border: 1px solid black; border-collapse:collapse">
    <tr>
        <td colspan="10" style="border: 1px solid black; text-align:center">Array Inicial</td>
    </tr>
    <tr>
<?php
    for($i = 0; $i < $contador; $i++)
    {
        echo "<td style='border: 1px dotted black; text-align:right'>".$i."</td>"; 
    }
// }
?>
</tr>
<tr>
<?php
    for($i = 0; $i < sizeof($array); $i++)
    {
        echo "<td style='border: 1px dotted black; text-align:right'>".$array[$i]."</td>"; 
    }
?>
</tr>
</table>
<?php
    $arrayPares = [];
    $arrayImpares = [];
    foreach($array as $valor) {
        if(esPrimo($valor))
        {
            array_push($arrayImpares,$valor);
        }
        else{
            array_push($arrayPares,$valor);
        }
    }
    // var_dump($arrayImpares);
    // echo "<br><br><br>";
    // var_dump($arrayPares);
    $arrayFinal = array_merge($arrayImpares,$arrayPares);
    ?>
    <br>
<table style="border: 1px solid black; border-collapse:collapse">
    <tr>
        <td colspan="10" style="border: 1px solid black; text-align:center">Array Inicial</td>
    </tr>
    <tr>
<?php
    for($i = 0; $i < $contador; $i++)
    {
        echo "<td style='border: 1px dotted black; text-align:right'>".$i."</td>"; 
    }
// }
?>
</tr>
<tr>
<?php
    for($i = 0; $i < sizeof($arrayFinal); $i++)
    {
        echo "<td style='border: 1px dotted black; text-align:right'>".$arrayFinal[$i]."</td>"; 
    }
?>
</tr>
</table>
<?php
}


if($contador < 11) {
?>
<form action="Ejercicio_T4_08.php" method="POST">
    <p>Escriba un número: <input type="number" name="numeroUsuaria" autofocus></p>
    <p><input type="hidden" name="contador" value="<?= ++$contador ?>"></p>
    <p><input type="hidden" name="numerosTexto" value="<?=  $numerosUsuariaTexto." ".$numeroUsuaria ?>"></p>
    <p><input type="submit" value="OK"></p>
</form>
<?php

}

//echo $numerosUsuariaTexto;
?>
</html>