<?php 
// PHP program to rotate a matrix 
$filasMatriz = 12; 
$columnasMatriz = 12;
// A function to rotate a matrix  
// mat[][] of size R x C. Initially, 
// m = R and n = C 
function rotarMatriz($numeroFilas, $numeroColumnas, $matrizInicial) 
{ 
    global $filasMatriz, $columnasMatriz; 
    $fila = 0; 
    $columna = 0; 
    $siguienteFilaElementoPrimero = 0; 
    $filaActual = 0; 
  
    /* 
    row - Staring row index 
    m - ending row index 
    col - starting column index 
    n - ending column index 
    i - iterator 
    */
    while ($fila < $numeroFilas && $columna < $numeroColumnas) 
    { 
  
        if ($fila + 1 == $numeroFilas ||  
            $columna + 1 == $numeroColumnas) 
            break; 
  
        // Store the first element  
        // of next row, this element  
        // will replace first element  
        // of current row 
        $siguienteFilaElementoPrimero = $matrizInicial[$fila + 1][$columna]; 
  
        /* Move elements of first row  
           from the remaining rows */
        for ($i = $columna; $i < $numeroColumnas; $i++) 
        { 
            $filaActual = $matrizInicial[$fila][$i]; 
            $matrizInicial[$fila][$i] = $siguienteFilaElementoPrimero; 
            $siguienteFilaElementoPrimero = $filaActual; 
        } 
        $fila++; 
  
        /* Move elements of last column 
           from the remaining columns */
        for ($i = $fila; $i < $numeroFilas; $i++) 
        { 
            $filaActual = $matrizInicial[$i][$numeroColumnas - 1]; 
            $matrizInicial[$i][$numeroColumnas - 1] = $siguienteFilaElementoPrimero; 
            $siguienteFilaElementoPrimero = $filaActual; 
        } 
        $numeroColumnas--; 
  
        /* Move elements of last row 
           from the remaining rows */
        if ($fila < $numeroFilas) 
        { 
            for ($i = $numeroColumnas - 1; 
                 $i >= $columna; $i--) 
            { 
                $filaActual = $matrizInicial[$numeroFilas - 1][$i]; 
                $matrizInicial[$numeroFilas - 1][$i] = $siguienteFilaElementoPrimero; 
                $siguienteFilaElementoPrimero = $filaActual; 
            } 
        } 
        $numeroFilas--; 
  
        /* Move elements of first column 
           from the remaining rows */
        if ($columna < $numeroColumnas) 
        { 
            for ($i = $numeroFilas - 1;  
                 $i >= $fila; $i--) 
            { 
                $filaActual = $matrizInicial[$i][$columna]; 
                $matrizInicial[$i][$columna] = $siguienteFilaElementoPrimero; 
                $siguienteFilaElementoPrimero = $filaActual; 
            } 
        } 
        $columna++; 
    } 
  
    // Print rotated matrix
    echo "<pre>"; 
    for ($i = 0; $i < $filasMatriz; $i++) 
    { 
        for ($j = 0; $j < $columnasMatriz; $j++) 
        {
            if($matrizInicial[$i][$j] < 10)
            {
                echo "  ". $matrizInicial[$i][$j]. " "; 
            } else {
                if($matrizInicial[$i][$j] < 100) {
                    echo " ". $matrizInicial[$i][$j] . " ";    
                } else {
                    echo $matrizInicial[$i][$j] . " "; 
                }
            }
        }
        echo "<br>"; 
    }
    echo "</pre>";
} 

// Driver code 
  
// Test Case 1 
$a = array(array(1, 2, 3, 4), 
           array(5, 6, 7, 8), 
           array(9, 10, 11, 12), 
           array(13, 14, 15, 16)); 

$matriz = [];

for($i = 0; $i < 12; $i++)
{
    for($j = 0; $j < 12; $j++)
    {
        $matriz[$i][$j] = rand(0,100);
    }
}

echo "MATRIZ ORIGINAL <br>";
echo "<pre>"; 
    for ($i = 0; $i < $filasMatriz; $i++) 
    { 
        for ($j = 0; $j < $columnasMatriz; $j++) 
        {
            if($matriz[$i][$j] < 10)
            {
                echo "  ". $matriz[$i][$j]. " "; 
            } else {
                if($matriz[$i][$j] < 100) {
                    echo " ". $matriz[$i][$j] . " ";    
                } else {
                    echo $matriz[$i][$j] . " "; 
                }
            }
        }
        echo "<br>"; 
    }
    echo "</pre>";
  
// Tese Case 2 
/* int $a = array(array(1, 2, 3), 
                  array(4, 5, 6), 
                  array(7, 8, 9)); 
*/
echo "MATRIZ ROTADA <br>";
rotarMatriz($filasMatriz, $columnasMatriz, $matriz); 
return 0; 

?>