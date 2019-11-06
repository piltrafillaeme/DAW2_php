<html>
    <?php 
    $puntos = 0;

    foreach($_POST as $respuesta)
    {
        $puntos = $puntos + $respuesta;
    }

    if ( $puntos <= 10 ) {
        echo "¡Enhorabuena! Tu pareja parece ser totalmente fiel.";
      }

      if ( ($puntos > 11 ) && ($puntos <= 22) ) {
        echo "Quizás exista el peligro de otra persona en su vida o en su mente, ";
        echo "aunque seguramente será algo sin importancia. No bajes la guardia.";
      }

      if ( $puntos >= 22 ) {
        echo "Tu pareja tiene todos los ingredientes de estar viviendo un ";
        echo "romance con otra persona. Te aconsejamos que indagues un poco más ";
        echo "y averigües qué es lo que está pasando por su cabeza.";
      }

    ?>
    <br><br>
    <a href="../Ejercicios_Tanda_2/Ejercicio_T2_15.html">Volver</a>
</html>