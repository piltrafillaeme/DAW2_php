<html>

	<form action="puntoDeSilla.php" method="POST">
		Filas:
		<input type="text" name="filas">
		<br>
		Columnas
		<input type="text" name="columnas">
		<input type="submit">
	</form>

<?php
    if(isset($_POST["filas"]) && isset($_POST["columnas"]))
    {
        $filas=$_POST['filas'];
        $columnas=$_POST['columnas'];
        $maximoFilas[$filas];
        $minimoColumnas[$columnas];
        for($i=0;$i<$filas;$i++)
    {
 
        $maximoFilas[$i]= -999;
    }
 
     for($j=0;$j<$columnas;$j++){
 
        $minimoColumnas[$j]= 999;
    }
 
    echo '<table border="1" width="820" align="center" >';
	for($i=0; $i < $columnas; $i++)
		{
            echo '<tr>';
    			for($j=0; $j < $filas; $j++)
    				{
                        echo '<td>';
 
        				$matriz[$i][$j] = rand(1,100);
 
        				echo $matriz[$i][$j]."\n";
 
                        echo '</td>';
    				}
            echo '</tr>';
                    echo '<p>';
 
 
		}
    echo '</table>';
 
        for($a=0;$a<$columnas;$a++)
    {
 
        for($b=0;$b<$filas;$b++)
        {
 
                if($matriz[$a][$b]>$maximoFilas[$a])
                {
 
                    $maximoFilas[$a]=$matriz[$a][$b];
 
 
                }
 
 
                if($matriz[$a][$b]<$minimoColumnas[$b])
                {
                    $minimoColumnas[$b]=$matriz[$a][$b];
                }
 
        }
    }
 
 
    for ($c=0; $c < $columnas ; $c++) {
 
        for ($d=0; $d < $filas; $d++) {
 
            if($maximoFilas[$c] = $minimoColumnas[$d]){
                $puntosilla=$maximoFilas[$c];
            }
        }
    }
 
    echo 'El punto de silla es : '.$puntosilla.' Ubicado en la fila '.$d.' Y columna '.$c.'<p>';

    }
	
 
     
 
 
?>
</html>