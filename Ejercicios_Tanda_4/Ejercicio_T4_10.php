<html>
<!-- Realiza un programa que escoja al azar 10 cartas de la baraja española y que 
diga cuántos puntos suman según el juego de la brisca. Emplea un array 
asociativo para obtener los puntos a partir del nombre de la figura de la carta. 
Asegúrate de que no se repite ninguna carta, igual que si las hubieras cogido 
de una baraja de verdad. -->
<?php 
$arrayPuntos = array(
    "As" => 11,
    "Dos" => 0,
    "Tres" => 10,
    "Cuatro" => 0,
    "Cinco" => 0,
    "Seis" => 0,
    "Siete" => 0,
    "Sota" => 2,
    "Caballo" => 3,
    "Rey" => 4  
);

$arrayPalos = array("Oros", "Copas", "Bastos", "Espadas");

$arrayFiguras = array("As","Dos","Tres","Cuatro","Cinco","Seis","Siete","Sota","Caballo","Rey");

$contadorCartasSeleccionadas = 0;
$cartasSeleccionadas[] = "";
$puntosAcumulados = 0;

do {
    $paloCarta = $arrayPalos[rand(0,3)];
    $figuraCarta = $arrayFiguras[rand(0,9)];
    $puntosCartaSeleccionada = $arrayPuntos[$figuraCarta];
    $nombreCarta = "$figuraCarta de $paloCarta";
    if(!in_array($nombreCarta, $cartasSeleccionadas))
    {
        echo "La carta seleccionada es: $nombreCarta <br>";
        echo "Esta carta tiene un valor de: $puntosCartaSeleccionada <br>";
        $cartasSeleccionadas[] = $nombreCarta;
        $puntosAcumulados = $puntosAcumulados + $puntosCartaSeleccionada;
        echo "Puntos obtenidos en esta jugada: $puntosAcumulados <br>";
        $contadorCartasSeleccionadas++;
    }
} while($contadorCartasSeleccionadas < 10);

echo "<br><b>Total: $puntosAcumulados puntos</b>";
?>
</html>