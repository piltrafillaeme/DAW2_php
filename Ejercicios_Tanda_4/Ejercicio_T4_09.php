<html>
<!-- Realiza un programa que pida 10 números por teclado y que los almacene en un array. 
A continuación se mostrará el contenido de ese array junto al índice (0 – 9). 
Seguidamente el programa pedirá dos posiciones a las que llamaremos “inicial” y “final”.
 Se debe comprobar que inicial es menor que final y que ambos números están entre 0 y 9. 
 El programa deberá colocar el número de la posición inicial en la posición final, rotando 
 el resto de números para que no se pierda ninguno. Al final se debe mostrar el array resultante. 
 Por ejemplo, para un valor inicial de 3 y otro final de 7 y basándonos en la tabla siguiente: -->
<?php
if(!isset($_POST["numeroUsuaria"]))
{
    $contador = 0;
    $numeroUsuaria = "";
    $numerosUsuariaTexto = "";
    
} else {
    $contador = $_POST["contador"];
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $numerosUsuariaTexto = $_POST["numerosTexto"];
    // $posicionInicial =  (int)$_POST["posicionInicial"];
    // $posicionFinal =  (int)$_POST["posicionFinal"];
}

if($contador == 10)
{
    $numerosUsuariaTexto = $numerosUsuariaTexto." ". $numeroUsuaria;
    $numerosUsuariaTexto = substr($numerosUsuariaTexto, 2);
?>
    <form action="Ejercicio_T4_09.php" method="POST">
    <p>Escriba la posición inicial: <input type="number" name="posicionInicial" autofocus></p>
    <p>Escriba la posición final: <input type="number" name="posicionFinal"></p>
    <p><input type="hidden" name="contador" value="13"></p>
    <p><input type="hidden" name="numerosTexto" value="<?php  echo $numerosUsuariaTexto; ?>"></p>
    <p><input type="hidden" name="numeroUsuaria"></p>
    <p><input type="submit" value="OK"></p>
    </form>        
<?php        
    }

    if($contador == 13)
    {
        $array = explode(" ", $numerosUsuariaTexto);
        $posicionInicial =  (int)$_POST["posicionInicial"];
        $posicionFinal =  (int)$_POST["posicionFinal"];

        $arrayFinal = [];
        //comprobamos que inicio sea menor que final y que ambos estén entre 0-9
        if(($posicionInicial >= $posicionFinal) || ($posicionInicial < 0) || ($posicionInicial > 9) || ($posicionFinal < 0) || ($posicionFinal > 9)) {
            echo "Los datos son incorrectos";
        } else {
            for ($i = 0; $i < sizeof($array); $i++) {
                if ($i == sizeof($array) - 1) {
                    $arrayFinal[0] = $array[$i];
                } else if ($i < $posicionInicial) {
                    $arrayFinal[$i + 1] = $array[$i];
                } else if ($i == $posicionInicial) {
                    $arrayFinal[$posicionFinal] = $array[$i];
                } else if ($i >= $posicionFinal) {
                    $arrayFinal[$i + 1] = $array[$i];
                } else if ($i > $posicionInicial && $i < $posicionFinal) {
                    $arrayFinal[$i] = $array[$i];
                }
            }
?>
        <table style="border: 1px solid black; border-collapse:collapse">
            <tr>
                <td colspan="10" style="border: 1px solid black; text-align:center">Array Inicial</td>
            </tr>
            <tr>
<?php
            for($i = 0; $i < sizeof($array); $i++)
            {
                echo "<td style='border: 1px dotted black; text-align:right'>".$i."</td>"; 
            }
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
        <br><br>
        <table style="border: 1px solid black; border-collapse:collapse">
            <tr>
                <td colspan="10" style="border: 1px solid black; text-align:center">Array Final</td>
            </tr>
            <tr>
<?php
            for($i = 0; $i < sizeof($array); $i++)
            {
                echo "<td style='border: 1px dotted black; text-align:right'>".$i."</td>"; 
            }
?>
            </tr>
            <tr>
<?php
            for($i = 0; $i < sizeof($array); $i++)
            {
                echo "<td style='border: 1px dotted black; text-align:right'>".$arrayFinal[$i]."</td>"; 
            }
?>
            </tr>
        </table>
<?php
     
        }
    }

if($contador < 10) {
?>
<form action="Ejercicio_T4_09.php" method="POST">
    <p>Escriba un número: <input type="number" name="numeroUsuaria" autofocus></p>
    <!-- <p>Escriba la posición inicial: <input type="number" name="posicionInicial"></p>
    <p>Escriba la posición final: <input type="number" name="posicionFinal"></p> -->
    <p><input type="hidden" name="contador" value="<?= ++$contador ?>"></p>
    <p><input type="hidden" name="numerosTexto" value="<?=  $numerosUsuariaTexto." ".$numeroUsuaria ?>"></p>
    <p><input type="submit" value="OK"></p>
</form>
<?php

}

?>
</html>