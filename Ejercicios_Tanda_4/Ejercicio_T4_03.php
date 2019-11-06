<html>
<!-- Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los elementos de ese array, es decir,
el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición debe
pasar a la posición 0. Finalmente, muestra el contenido del array.-->

<?php 
if(!isset($_GET["numeroUsuaria"]))
{
    $numeroUsuaria = "";
    $contador = 0;
    $numerosUsuariaTexto = "";
} else {
    $numeroUsuaria = $_GET["numeroUsuaria"];
    $contador = $_GET["contador"];
    $numerosUsuariaTexto = $_GET["numerosUsuariaTexto"];
    }

$nuevoArray = [];
if($contador == 15){
    $numerosUsuariaTexto = $numerosUsuariaTexto." ". $numeroUsuaria;
    $numerosUsuariaTexto = substr($numerosUsuariaTexto, 2);
    $arrayNumeros = explode(" ", $numerosUsuariaTexto);

    for($i = 0; $i < sizeof($arrayNumeros); $i++){
        if($i == sizeof($arrayNumeros)-1){
            $nuevoArray[0] = $arrayNumeros[$i];
        }else{
            $nuevoArray[$i+1] = $arrayNumeros[$i];
        }
    }

    for($i = 0; $i < sizeof($nuevoArray); $i++){
        if($i == sizeof($nuevoArray)-1){
            echo $nuevoArray[$i];
        }else{
            echo $nuevoArray[$i]." - ";
        }
    }

    ?>
        <br>
        <a href="Ejercicio_T4_03.php">Volver</a>
        <?php
}

if($contador < 15)
{
        ?>
        <form action="Ejercicio_T4_03.php" method="GET">
            <p>Introduzca un número: <input type="number" name="numeroUsuaria" autofocus></p>
            <p><input type="hidden" name="contador" value="<?= ++$contador ?>"></p>
            <p><input type="hidden" name="numerosUsuariaTexto" value="<?= $numerosUsuariaTexto." ".$numeroUsuaria?>"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
        <?php
            
}
?>
</html>