<html>
<!-- Realiza un programa que pida 10 números por teclado y que los almacene en un array.
A continuación se mostrará el contenido de ese array junto al índice (0 – 9) 
utilizando para ello una tabla. Seguidamente el programa pasará los primos a las 
primeras posiciones, desplazando el resto de números (los que no son primos) de 
tal forma que no se pierda ninguno. Al final se debe mostrar el array resultante.  -->
<?php

if(!isset($_POST["numeroUsuaria"]))
{
    $contador = 0;
    $numerosUsuariaTexto = "";
    $numeroUsuaria = 0;
}
else{
    $contador = $_POST["contador"];
    $numerosUsuariaTexto = $_POST["numerosTexto"];
    $numeroUsuaria = $_POST["numeroUsuaria"];
}

if($contador < 10)
{
    // $contador = $_POST["contador"];
    // $numeroUsuaria = $_POST["numeroUsuaria"];
    // $numerosUsuariaTexto = $_POST["numerosTexto"];   

    if($numerosUsuariaTexto == "")
    {
        $numerosUsuariaTexto = $numeroUsuaria;
    }
    else{
        $numerosUsuariaTexto = $numerosUsuariaTexto.' '.$numeroUsuaria;
    }

    $contador++;
}

if($contador < 4)
{
?>
<form action="Ejercicio_T4_08.php" method="POST">
    <p>Escriba un número: <input type="number" name="numeroUsuaria" autofocus></p>
    <p><input type="hidden" name="contador" value="<?php echo $contador; ?>"></p>
    <p><input type="hidden" name="numerosTexto" value="<?php echo $numerosUsuariaTexto; ?>"></p>
    <p><input type="submit" value="OK"></p>
</form>
<?php
}

echo $numerosUsuariaTexto;
if($contador == 4)
{
    $array = explode(" ", $numerosUsuariaTexto);
    var_dump($array);
}
?>


</html>