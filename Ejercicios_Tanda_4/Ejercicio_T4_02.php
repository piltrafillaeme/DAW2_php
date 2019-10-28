<html>
<!-- Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo” al 
lado del máximo y del mínimo respectivamente. -->
<?php
if(!isset($_POST["numeroUsuaria"])){
    $contador = 0;
    $numeroUsuaria = 0;
}
else
{
    $numeroUsuaria = $_POST["numeroUsuaria"];
    $contador = $_POST["contador"];
}

if($contador < 10)
{
?>
<form action="Ejercicio_T4_02.php" method="POST">
    <p>Introduzca un número: <input type="number" name="numeroUsuaria"></p>
    <p><input type="hidden" name="contador" value="<?php ++$contador ?>"></p>
    <p><input type="submit" value="Enviar"></p>
</form>
<?php
    
    $arrayUsuaria[$contador] = $numeroUsuaria;
    $contador++;   
}

print_r($arrayUsuaria);
?>
</html>