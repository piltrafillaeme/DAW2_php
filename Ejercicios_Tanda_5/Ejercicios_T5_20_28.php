<html>
<?php
// 1. generaArrayInt: Genera un array de tamaño n con números aleatorios cuyo intervalo (mínimo y máximo) se indica como parámetro.
$arrayPrueba = [1,19,3,4,5];
$arrayPruebaDos = [1,2,3,4,5];
function generaArrayInt($minimo,$maximo)
{
    $array = array();

    for($i = $minimo; $i <= $maximo; $i++)
    {
        $numeroAleatorio = rand($minimo, $maximo);
        array_push($array,$numeroAleatorio);
    }

    return $array;
}

var_dump(generaArrayInt(2,8));
$arrayAleatorio = generaArrayInt(1,10);
echo "<br>";

// 2. minimoArrayInt: Devuelve el mínimo del array que se pasa como parámetro.

function minimoArrayInt($array)
{
    $minimoArray = min($array);

    return $minimoArray;
}

$minimo = minimoArrayInt($arrayAleatorio);
echo "El número más pequeño del array es: ".$minimo;
echo "<br>";

// 3. maximoArrayInt: Devuelve el máximo del array que se pasa como parámetro.

function maximoArrayInt($array)
{
    $maximo = max($array);

    return $maximo;
}

$maximo = maximoArrayInt($arrayPrueba);
echo "El número más alto del array es: ".$maximo;
echo "<br>";

// 4. mediaArrayInt: Devuelve la media del array que se pasa como parámetro.

function mediaArrayInt($array)
{
    $suma = 0;
    foreach ($array as $numero)
    {
        $suma = $suma + $numero;
    }
    
    $media = $suma / sizeof($array);
    return $media;
}

$media = mediaArrayInt($arrayPrueba);
echo "La media es: ".$media;
echo "<br>";

// 5. estaEnArrayInt: Dice si un número está o no dentro de un array.

function estaEnArrayInt($array,$numero)
{
    $estaEnArray = in_array($numero,$array);

    return $estaEnArray;
}

if(estaEnArrayInt($arrayPrueba,19)){
    echo "Está dentro del array el número indicado";
}
else
{
    echo "NO está dentro del array el número indicado";
}
echo "<br>";

// 6. posicionEnArray: Busca un número en un array y devuelve la posición (el índice) en la que se encuentra.

function posicionEnArray($numero,$array)
{
    $posicion = array_search($numero,$array);

    return $posicion;
}
$posicion = posicionEnArray(19,$arrayPrueba);

if(is_numeric($posicion))
{
    
    echo "El número se encuentra en la posición: ".$posicion;
}
else
{
    echo "El número no se encuentra en el array";
}
echo "<br>";

// 7. volteaArrayInt: Le da la vuelta a un array.

function volteaArrayInt($array)
{
    $arrayReves = array_reverse($array);

    return $arrayReves;
}

$arrayVolteado = volteaArrayInt($arrayPrueba);
echo "Array original: ";
echo "<br>";
var_dump($arrayPrueba);
echo "<br>";
echo "Array volteado: ";
echo "<br>";
var_dump($arrayVolteado);
echo "<br>";



// 8. rotaDerechaArrayInt: Rota n posiciones a la derecha los números de un array.

function rotaDerechaArrayint($posiciones,$array)
{
    for($i = 0; $i < $posiciones; $i++)
    {
        $ultimo = array_pop($array);
        array_unshift($array,$ultimo);
    }

    return $array;
}

$arrayRotado = rotaDerechaArrayint(2,$arrayPrueba);
var_dump($arrayPrueba);
echo "<br>";
var_dump($arrayRotado);
echo "<br>";

// 9. rotaIzquierdaArrayInt: Rota n posiciones a la izquierda los números de un array.

function rotaIzquierdaArrayint($posiciones,$array)
{
    for($i = 0; $i < $posiciones; $i++)
    {
        $primero = array_shift($array);
        array_push($array,$primero);
    }

    return $array;
}

$arrayRotado = rotaIzquierdaArrayint(2,$arrayPrueba);
var_dump($arrayPrueba);
echo "<br>";
var_dump($arrayRotado);
echo "<br>";
?>
</html>