<html>
    <?php
    $arrayRespuestas = array(5); 
    $arrayRespuestas[0] = $_POST["preguntaUno"];
    $arrayRespuestas[1] = $_POST["preguntaDos"];
    $arrayRespuestas[2] = $_POST["preguntaTres"];
    $arrayRespuestas[3] = $_POST["preguntaCuatro"];
    $arrayRespuestas[4] = $_POST["preguntaCinco"];
    $arrayRespuestas[5] = $_POST["preguntaSeis"];
    $arrayRespuestas[6] = $_POST["preguntaSiete"];
    $arrayRespuestas[7] = $_POST["preguntaOcho"];
    $arrayRespuestas[8] = $_POST["preguntaNueve"];
    $arrayRespuestas[9] = $_POST["preguntaDiez"];
    $aciertos = 0;
    for($i = 0; $i < 10; $i++)
    {
        if($arrayRespuestas[$i] == "sí")
        {
            $aciertos++;
        }
    }
    
  if($aciertos < 5)
  {
      echo "Ha tenido ", $aciertos, " aciertos. ¡Está suspenso!";
  }
  else
    {
        if($aciertos < 7)
        {
            echo "Ha tenido ", $aciertos, " aciertos. ¡Está aprobado!";
        }
        else
        {
            if($aciertos < 9)
            {
                echo "Ha tenido ", $aciertos, " aciertos. ¡Notable!";
            }
            else
            {
                echo "Ha tenido ", $aciertos, " aciertos. ¡Sobresaliente!";
            }
        }
    }
    ?>
</html>