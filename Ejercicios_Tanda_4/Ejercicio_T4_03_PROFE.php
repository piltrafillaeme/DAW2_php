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

  if ($contadorNumeros == 15) {
    $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
    $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes

    $numero = explode(" ", $numeroTexto);

    // Muestra el array original

    echo "Array original:<br>";

    echo "<table><tr>";

    for ($i = 0; $i < 15; $i++) {
      echo "<td>$i</td>";
    }

    echo "</tr>";

    for ($i = 0; $i < 15; $i++) {
      echo "<td>".$numero[$i]."</td>";
    }

    echo "</tr></table>";


    // Rota los elementos del array hacia la derecha

    $aux = $numero[14];

    for ($i = 14; $i > 0; $i--) {
       $numero[$i] = $numero[$i - 1];
    }

    $numero[0] = $aux;

    // Muestra el array rotado

    echo "<br>Array rotado:<br>";
    echo "<table><tr>";

    for ($i = 0; $i < 15; $i++) {
      echo "<td>$i</td>";
    }

    echo "</tr>";

    for ($i = 0; $i < 15; $i++) {
      echo "<td>".$numero[$i]."</td>";
    }

    echo "</tr></table>";
    ?>
    <br>
    <a href="03.php">>> Volver</a>
    <?php
  }
  //////////////////////////////////////////////////////////////////////////////

  // Pide número y añade el actual a la cadena
  if ($contadorNumeros < 15){
    ?>
    <form action="Ejercicio_T4_03_PROFE.php" method="get">
      Introduzca un número:
      <input type="number" name ="n" autofocus>
      <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
      <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
      <input type="submit" value="OK">
    </form>
    <?php
  }