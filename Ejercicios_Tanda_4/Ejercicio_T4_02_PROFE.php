<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T4-02.php</title>
  </head>
  <body>
    <?php
        if (!isset($_GET['n'])) {
          $contadorNumeros = 0;
          $numeroTexto = "";
          $n = "";
        } else {
          $n = $_GET['n'];
          $contadorNumeros = $_GET['contadorNumeros'];
          $numeroTexto = $_GET['numeroTexto'];
        }

      ////////////////////////////////////////////////////////////////
      //  Programa principal una vez recogidos los datos del array.
      //  El array con los números es $numero
      ////////////////////////////////////////////////////////////////

      if ($contadorNumeros == 10) {
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        echo $numeroTexto. "<br>";
        $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes
        echo $numeroTexto. "<br>";
        $numero = explode(" ", $numeroTexto);
        $maximo = PHP_INT_MAX;
        $minimo = PHP_INT_MIN;


        foreach ($numero as $n) {
          if ($n < $minimo) {
            $minimo = $n;
          }
          if ($n > $maximo) {
            $maximo = $n;
          }
        }

        foreach ($numero as $n) {
          echo "$n";
          if ($n == $minimo) {
            echo " mínimo";
          }
          if ($n == $maximo) {
            echo " máximo";
          }
          echo "<br>";
        }
        ?>
        <br>
        <a href="02.php">>> Volver</a>
        <?php
      }
      ////////////////////////////////////////////////////////////////
      // Pide número y añade el actual a la cadena
      ////////////////////////////////////////////////////////////////
      if ($contadorNumeros < 10)  {
        ?>
        <form action="Ejercicio_T4_02_PROFE.php" method="get">
          Introduzca un número:
          <input type="number" name ="n" autofocus>
          <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
          <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
          <input type="submit" value="OK">
        </form>
        <?php
      }
      ?>
  </body>
</html>