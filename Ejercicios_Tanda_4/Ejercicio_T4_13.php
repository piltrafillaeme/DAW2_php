<html>
<!-- Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendidos entre 100 y 999 (ambos inclusive). 
Todos los números deben ser distintos, es decir, no se puede repetir ninguno. Muestra a continuación por pantalla el contenido del array 
de tal forma que se cumplan los siguientes requisitos:
• Los números de las dos diagonales donde está el mínimo deben aparecer en color verde. 
• El mínimo debe aparecer en color azul.
• El resto de números debe aparecer en color negro. -->
<?php
$filas = 9;
$columnas = 6;
/* for($i = 0; $i < $filas; $i++)
{
    for($j = 0; $j < $columnas; $j++)
    {
        $arrayBidimensional[$i][$j] = rand(100,999);
    }
    print_r($arrayBidimensional[$i]);
    echo "<br>";
} */

//GENERAMOS EL ARRAY EN UNO LINEAL PARA COMPROBAR QUE NO SE REPITA NINGUNO
$arrayLineal = array();
$i = 0;

$longitudTotal = $filas * $columnas;
do{
    $numeroAleatorio = rand(100,999);
    if(!in_array($numeroAleatorio, $arrayLineal)){
        $arrayLineal[] = $numeroAleatorio;
        $i++;
    }
} while($i < $longitudTotal); 
    
$minimo = 999;
$i = 0;
for($x = 0; $x < $filas; $x++) {
    for($y = 0; $y < $columnas; $y++) {
        $arrayBidimensional[$x][$y] = $arrayLineal[$i];
        $i++;
        if($arrayBidimensional[$x][$y] < $minimo) {
            $minimo = $arrayBidimensional[$x][$y];
            $minimoFila = $arrayBidimensional[$x];
            $minimoColumna = $arrayBidimensional[$x][$y];
        }
    }
    print_r($arrayBidimensional[$x]);
    echo "<br>";
}
/* 
echo "<table>";
      for ($x = 0; $x < 9; $x++) {
        echo "<tr>";
        for ($y = 0; $y < 6; $y++) {
          if ($arrayBidimensional[$x][$y] == $minimo) {
            echo '<td><span style="color: blue; font-weight:bold">'.$arrayBidimensional[$x][$y].' </span></td>';
          } else if (abs((abs($x) - abs($minimoFila))) == abs((abs($y) - abs($minimoColumna)))) {
            echo '<td><span style="color: green; font-weight:bold">'.$arrayBidimensional[$x][$y].' </span></td>';
          } else {
            echo '<td>'.$arrayBidimensional[$x][$y].'</td>';
          }
        }
        echo "</tr>";
      }
      echo "</table>"; */




?>
</html>