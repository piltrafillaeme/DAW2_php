<?php 

//1. esCapicua: Devuelve verdadero si el número que se pasa como parámetro es capicúa y falso en caso contrario.

function esCapicua($numero) {
    $esCapi = true;
    $array = str_split($numero);
    $arrayReverse = array_reverse($array);

    for($i = 0; $i < sizeof($array); $i++)
    {
        if($array[$i] != $arrayReverse[$i])
        {
            $esCapi = false;
        }
    }
    return $esCapi;
}

if(esCapicua(43251234))
{
    echo "es capicúa";
}
else{
    echo "no es capicua";
}
echo "<br>";

// 2. esPrimo: Devuelve verdadero si el número que se pasa como parámetro es primo y falso en caso contrario.

function esPrimo($numero)
{
    $primo = true;
    $contador = 0;
    for($i = 1; $i <= $numero; $i++)
    {
        if($numero % $i == 0)
        {
            $contador++;
        }
    }

    if($contador != 2)
    {
        $primo = false;
    }

    return $primo;
}

if(esPrimo(349))
{
    echo "es primo";
}
else{
    echo "no es primo";
}

echo "<br>";

// 3. siguientePrimo: Devuelve el menor primo que es mayor al número que se pasa como parámetro.

function siguientePrimo($numero){

    $siguientes = $numero;
    do {
        $siguientes++;
    } while(!esPrimo($siguientes));

    return $siguientes;
}

$resultado = siguientePrimo(347);
echo $resultado;
echo "<br>";

// 4. potencia: Dada una base y un exponente devuelve la potencia.

function potencia($base,$exponente) {
    $potencia = pow($base,$exponente);

    return $potencia;
}

$resultado = potencia(2,3);
echo $resultado;
echo "<br>";


// 5. digitos: Cuenta el número de dígitos de un número entero.

function digitos($numero) {
    $numeroDigitos = strlen($numero);

    return $numeroDigitos;
}

$resultado = digitos(123456789);
echo $resultado;
echo "<br>";

// 6. voltea: Le da la vuelta a un número.

function voltea($numero) {
    $numeroCadena = (string) $numero; 
    $numeroCadenaReves = strrev($numeroCadena);

    return $numeroCadenaReves;
}

$resultado = voltea(123456789);
echo $resultado;
echo "<br>";

// 7. digitoN: Devuelve el dígito que está en la posición n de un número entero. Se empieza contando por el 0 y de izquierda a derecha.

function digitoN($numero,$posicion)
{
    $numeroCadena = (string)$numero;
    $array = str_split($numeroCadena);
    $digito = $array[$posicion];

    return $digito;
}

$resultado = digitoN(123456789,4);
echo $resultado;
echo "<br>";

// 8. posicionDeDigito: Da la posición de la primera ocurrencia de un dígito dentro de un número entero. Si no se encuentra, devuelve -1.

function posicionDeDigito($numero, $digito) {
    $numeroCadena = (string)$numero;
    $digitoCadena = (string)$digito;
    $posicion = strpos($numeroCadena,$digitoCadena);
    if($posicion == false)
    {
        $posicion = -1;
    }

    return $posicion;
}

$resultado = posicionDeDigito(123456789,10);
echo $resultado;
echo "<br>";

// 9. quitaPorDetras: Le quita a un número n dígitos por detrás (por la derecha).

function quitaPorDetras($numero, $digitos) {
    $numeroCadena = (string)$numero;
    $array = str_split($numeroCadena);
    $longitud = sizeof($array) - $digitos;
    $arrayFinal = array_splice($array,0,$longitud);

    $numeroFinal = implode("",$arrayFinal);

    return $numeroFinal;
}

$resultado = quitaPorDetras(12345,4);
echo $resultado;
echo "<br>";
// 10. quitaPorDelante: Le quita a un número n dígitos por delante (por la izquierda).
function quitaPorDelante($numero, $digitos) {
    $numeroCadena = (string)$numero;
    $array = str_split($numeroCadena);
    $final = sizeof($array);
    $arrayFinal = array_splice($array,$digitos,$final);

    $numeroFinal = implode("",$arrayFinal);

    return $numeroFinal;
}

$resultado = quitaPorDelante(1234,2);
echo $resultado;
echo "<br>";

// 11. pegaPorDetras: Añade un dígito a un número por detrás.
function pegaPorDetras($numero, $digito) {
    $numeroCadena = (string)$numero;
    $digitoCadena = (string)$digito;
    $numeroFinalCadena = $numeroCadena.$digitoCadena;
    $numeroFinal = (int)$numeroFinalCadena;
   
    return $numeroFinalCadena;
}

$resultado = pegaPorDetras(12345,2);
echo $resultado;
echo "<br>";
// 12. pegaPorDelante: Añade un dígito a un número por delante.

function pegaPorDelante($numero, $digito) {
    $numeroCadena = (string)$numero;
    $digitoCadena = (string)$digito;
    $numeroFinalCadena = $digitoCadena.$numeroCadena;
    $numeroFinal = (int)$numeroFinalCadena;
   
    return $numeroFinalCadena;
}

$resultado = pegaPorDelante(12345,2);
echo $resultado;
echo "<br>";

// 13. trozoDeNumero: Toma como parámetros las posiciones inicial y final dentro de un número y devuelve el trozo correspondiente.

function trozoDeNumero($numero, $posicionInicial, $posicionFinal) {
    $numeroCadena = (string)$numero;
    $arrayNumeroCadena = str_split($numeroCadena);
    $trozoArray = array_splice($arrayNumeroCadena,$posicionInicial,$posicionFinal);
    $trozoCadena = implode("",$trozoArray);
    $trozoNumero = (int)$trozoCadena;

    return $trozoNumero;
}

$resultado = trozoDeNumero(123456789,4,3);
echo $resultado;
echo "<br>";

// 14. juntaNumeros: Pega dos números para formar uno.

function juntaNumeros($numeroUno, $numeroDos) {
    $numeroFinal = $numeroUno.$numeroDos;
    $numeroFinal = (int)$numeroFinal;
    return $numeroFinal;
}

$resultado = juntaNumeros(1,2);
echo $resultado;
echo "<br>";

?>