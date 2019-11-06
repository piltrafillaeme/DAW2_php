<html>
<!-- Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. 
En el array “cuadrado” se deben almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben almacenar los cubos de los 
valores que hay en “numero”. A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas. -->
<style>
table {
    border-collapse: collapse;
    border: solid;
    text-align: center;
    
}
.cabecera {
    border: solid;
    background-color: orange;
}
td {
    border: solid;
}
</style>
<?php 
$arrayNumero = array();
$arrayCuadrado = array();
$arrayCubo = array();

//cargamos el primer array con 20 números aleatorios entre 0 y 100
for($i = 0; $i < 20; $i++)
{
    $arrayNumero[$i] = rand(0,100);
    $arrayCuadrado[$i] = pow($arrayNumero[$i],2);
    $arrayCubo[$i] = pow($arrayNumero[$i],3);
}

// print_r($arrayNumero);
// echo "<br>";
// print_r($arrayCuadrado);
// echo "<br>";
// print_r($arrayCubo);
?>
<table>
<tr class="cabecera">
    <td class="cabecera">Base</td>
    <td class="cabecera">Cuadrado</td>
    <td class="cabecera">Cubo</td>
</tr>
<?php
for($j = 0; $j < sizeof($arrayNumero); $j++)
{
    ?>
    <tr>
    <td><?php echo $arrayNumero[$j] ?></td>
    <td><?php echo$arrayCuadrado[$j] ?></td>
    <td><?php echo$arrayCubo[$j] ?></td>
    </tr>
    <?php
}
?>
</table>
</html>
