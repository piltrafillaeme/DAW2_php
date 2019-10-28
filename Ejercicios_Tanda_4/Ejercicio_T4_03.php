<html>
<!-- Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los elementos de ese array, es decir,
el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición debe
pasar a la posición 0. Finalmente, muestra el contenido del array.-->

<?php 
if(!isset($_POST["numeroUsuaria"]))
{
    $numeroUsuaria = "";
    $contador = 0;
    $numerosUsuariaTexto = "";
}
else
{
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $contador = $_POST["contador"];
    $numerosUsuariaTexto = $_POST["numerosUsuariaTexto"];
    $contador++;
}

if($contador < 4)
{
        ?>
        <form action="Ejercicio_T4_03.php" method="POST">
            <p>Introduzca un número: <input type="number" name="numeroUsuaria" autofocus></p>
            <p><input type="hidden" name="contador" value="<?php ++$contador ?>"></p>
            <p><input type="hidden" name="numerosUsuariaTexto" value="<?php $numerosUsuariaTexto . " " . $numeroUsuaria?>"></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
        <?php
            
}
else{
    echo $numerosUsuariaTexto;
}
   

?>
</html>