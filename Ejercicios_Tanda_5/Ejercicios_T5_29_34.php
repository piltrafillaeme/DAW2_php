<html>
<?php
$arrayPruebaDos = array(array(5,4,6,7),array(3,2,9,8),array(5,1,6,3));

function MuestraArrayBidimensional($array)
{
    $numeroFilas = sizeof($array);
    for($i = 0; $i < $numeroFilas; $i++)
    {
        $numeroColumnas = sizeof($array[$i]);
        for($j = 0; $j < $numeroColumnas; $j++)
        {
            echo $array[$i][$j]." "; 
        }
        echo "<br>";
    }
}

// 1. generaArrayBiInt: Genera un array de tamaño n x m con números aleatorios cuyo intervalo (mínimo y máximo) se indica como parámetro.

function generaArrayBiInt($filas, $columnas, $minimo, $maximo)
{
    $arrayBi = array();
    for($i = 0; $i < $filas; $i++)
    {
        for($j = 0; $j < $columnas; $j++)
        {
            $arrayBi[$i][$j] = rand($minimo,$maximo);
        }
    }

    return $arrayBi;
}


$arrayPrueba = generaArrayBiInt(3,3,1,99);
MuestraArrayBidimensional($arrayPrueba);
echo "<br>";


// 2. filaDeArrayBiInt: Devuelve la fila i-ésima del array que se pasa como parámetro.

function filaDeArrayBiInt($array)
{
    $filaArrayBi = sizeof($array);

    return $filaArrayBi;
}

echo filaDeArrayBiInt($arrayPrueba);
echo "<br>";

// 3. columnaDeArrayBiInt: Devuelve la columna j-ésima del array que se pasa como parámetro.

function columnaDeArrayBiInt($array)
{
    $columnaArrayBi = sizeof($array[0]);

    return $columnaArrayBi;
}
echo columnaDeArrayBiInt($arrayPrueba);
echo "<br>";

// 4. coordenadasEnArrayBiInt: Devuelve la fila y la columna (en un array con dos elementos) de la primera ocurrencia de un número dentro de un array bidimensional.
// Si el número no se encuentra en el array, la función devuelve el array {-1, -1}.

function coordenadasEnArrayBiInt($arrayBi, $numero)
{
    $array = [-1,-1];
    $indiceNumero = array_search($numero, $arrayBi);
    if(!is_numeric($indiceNumero))
    {
        return $array;
    }
    else
    {
        return $indiceNumero;
    }
    
}
$primeraOcurrencia = coordenadasEnArrayBiInt($arrayPruebaDos,1);
echo var_dump($primeraOcurrencia);
echo "<br>";

// 5. esPuntoDeSilla: Dice si un número es o no punto de silla, es decir, mínimo en su fila y máximo en su columna.

function esPuntoDeSilla($array, $numero)
{
    $puntoDeSilla = false;
    $minimoFila = min($array[0]);
    echo $minimoFila;
    for($i = 1; $i < sizeof($array); $i++)
    {
        if($minimoFila > min($array[$i]))
        {
            $minimoFila = $array[$i];
            $maximoColumna = $array[$i];
            for($j = 0; $j < sizeof($array[$i]); $j++)
            {
                
            }
            $posicionMinimo = $i;
        }
    }

    $columna = array_search($minimoFila, $array);
    echo "<br>".$columna;
    if($maximoColumna != max($array[$posicionMinimo][$columna]))
    {
        $puntoDeSilla = true;
    }
    
    return $puntoDeSilla;
}

if(esPuntoDeSilla($arrayPruebaDos,4))
{
    echo "es punto de silla";
}
else{
    echo "no es punto de silla";
}

// 6. diagonal: Devuelve un array que contiene una de las diagonales del array bidimensional que se pasa como parámetro. Se pasan como parámetros fila, columna y dirección.
// La fila y la columna determinan el número que marcará las dos posibles diagonales dentro del array. La dirección es una cadena de caracteres que puede ser “nose” o “neso”.
// La cadena “nose” indica que se elige la diagonal que va del noroeste hacia el sureste, mientras que la cadena “neso” indica que se elige la diagonal que va del noreste hacia
// el suroeste.

$array = [];
$test = 1;

for($i = 0; $i < 4; $i++)
{
    for($j = 0; $j < 5; $j++)
    {
        $array[$i][$j] = $test;
        $test++;
    }

}
echo "<br>";
print_r($array);
echo "<br>";
echo sizeof($array);
echo "<br>";
echo sizeof($array[0]);

function Diagonal($arrayBidimensional, $fila, $columna, $direccion)
{
    $arrayFinal = [];
    $k = $columna;
    $i = $fila;
    if($fila < sizeof($arrayBidimensional) && $columna < sizeof($arrayBidimensional[0]))
    {
        if($direccion == "nose")
        {
            while($k < sizeof($arrayBidimensional) && $i < sizeof($arrayBidimensional))
            {
                $arrayFinal[] = $arrayBidimensional[$i][$k];
                $k++;
                $i++;
            }
        } else {
            if($direccion == "neso") {
                while($k >= 0 && $i < sizeof($arrayBidimensional))
                {
                    $arrayFinal[] = $arrayBidimensional[$i][$k];
                    $k--;
                    $i++;
                }
            }
            else{
                echo "La dirección es incorrecta";
            }
        }
    } else {
        echo "La fila o columna introducida se sale de los límites.";
    }
    

    return $arrayFinal;
}

print_r(Diagonal($array, 1,2,"neso"));
?>
</html>