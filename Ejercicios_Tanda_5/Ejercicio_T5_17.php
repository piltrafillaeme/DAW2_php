<html>
<!-- Escribe un programa que pase de binario a decimal. -->
<?php 
function BinarioDecimal($numeroBinario)
{
    $decimal = bindec($numeroBinario);

    return $decimal;
}

$decimal = BinarioDecimal(100000);

echo $decimal;
?>
</html>