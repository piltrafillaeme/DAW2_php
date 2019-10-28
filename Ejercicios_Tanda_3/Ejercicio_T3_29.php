<html>
<?php
if(!isset($_POST["numeroUsuariaUno"]))
{
?>
    <form action="Ejercicio_T3_29.php" method="post">
    <p>Introduzca un número: <input type="number" name="numeroUsuariaUno" autofocus></p>
    <p>Introduzca otro número: <input type="number" name="numeroUsuariaDos"></p>
    <p><input type="submit" value="Aceptar"></p>
    </form>
<?php    
}
else
{
    $numeroUsuariaUno = $_POST["numeroUsuariaUno"];
    $numeroUsuariaDos = $_POST["numeroUsuariaDos"];
    $arrayNumeros = array();
    $indiceArray = 0;

    for ($i = 1; $i < $numeroUsuariaUno; $i++)
    {
        if($i % $numeroUsuariaDos == 0)
        {
            $arrayNumeros[$indiceArray] = $i;
            $indiceArray++;
        }
    }

    for ($i = 0; $i < sizeof($arrayNumeros); $i++)
    {
        if($i == sizeof($arrayNumeros) - 1)
        {
           echo $arrayNumeros[$i];
        }
        else
        {
            echo $arrayNumeros[$i], ", ";   
        }
    }
}
?>
</html>