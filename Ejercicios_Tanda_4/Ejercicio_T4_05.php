<?php
  if (!isset($_GET['temperatura'])) {
    // Pide los datos de las temperaturas
    $mes = array(
      "Enero&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Febrero&nbsp;&nbsp;&nbsp;", "Marzo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Abril&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Mayo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Junio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",
      "Julio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", "Agosto&nbsp;&nbsp;&nbsp;&nbsp;", "Septiembre", "Octubre&nbsp;&nbsp;&nbsp;", "Noviembre&nbsp;", "Diciembre&nbsp;");
    ?>
    Por favor, introduzca la temperatura media de cada mes: <br><br>
    <form action="Ejercicio_T4_05.php" method="get">
      <?php
      echo "<table>";
      for ($i = 0; $i < 12; $i++) {
        echo "<tr><td>$mes[$i]</td><td> <input type=\"number\" name =\"temperatura[$mes[$i]]\"><br></td></tr>";
      }
      echo "</table><br>";
      ?>
      <input type="submit" value="OK">

    </form>

    <?php
  } else {
    // Pinta el diagrama de barras
    $temperatura = $_GET['temperatura'];
    echo "<table>";
    foreach($temperatura as $mes => $temperaturaMes) {
      echo "<tr><td>$mes </td><td>";
      // Pinta la barra
      for ($i = 0; $i < $temperaturaMes; $i++) {
        echo "<img src=\"bggreen.png\">";
      }
      echo " $temperaturaMes"."ºC<br></td></tr>";
    }
    echo "</table>";
    ?>
    <br>
    <a href="05.php">>> Volver</a>
    <?php
  }