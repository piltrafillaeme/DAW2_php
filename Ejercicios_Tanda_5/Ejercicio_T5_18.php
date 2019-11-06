<html>
<!-- Escribe un programa que pase de decimal a binario. -->
<?php
function DecimalBinario($numeroDecimal)
{
    $binario = decbin($numeroDecimal);

    return $binario;
}

$binario = DecimalBinario(32);

echo $binario;
?>
</html>