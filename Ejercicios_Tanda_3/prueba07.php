<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>07.php</title>
  </head>
  <body>
        <?php
          if (!isset($_POST['oportunidades'])) {
            $numeroIntroducido = 55555;
            $oportunidades = 3;
          } else {
            $oportunidades = $_POST['oportunidades'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
          }

          $numeroSecreto = 1234;

          if ($numeroIntroducido == $numeroSecreto) {
            echo "La caja fuerte se ha abierto.";
            echo '<img src="https://media.sticker.market/gif/safe-58d1ef7b6abb8028a35740f6-g.gif" alt="">';
          } else if ($oportunidades == 0) {
            echo "Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.";
          } else {
            echo "Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.<br>";
            $oportunidades--;
            echo "Introduce un número de cuatro cifras.";
            echo '<form action="07.php" method="post">';
            echo '<input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
            echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
            echo '<input type="submit" value="Continuar">';
            echo '</form>';
          }
        ?>
  </body>
</html>