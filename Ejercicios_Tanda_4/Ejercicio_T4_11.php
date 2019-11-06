<html>
<!-- Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una 
palabra en español y dará la correspondiente traducción en inglés. -->
<form action="Ejercicio_T4_11.php" method="POST">
<p>Escriba una palabra en español para conocer su traducción al inglés: <input type="text" name="palabraUsuaria" autofocus></p>
<p><input type="submit" value="Traducir"></p>
</form>
<?php
$arrayTraduccion = [
    "hola" => "Hello",
    "adios" => "Goodbye",
    "verde" => "Green",
    "blanco" => "White",
    "azul" => "Blue",
    "rojo" => "Red",
    "naranja" => "Orange",
    "rosa" => "Pink",
    "amarillo" => "Yellow",
    "negro" => "Black"
];

$arrayPalabrasEspanolas = [];

foreach($arrayTraduccion as $clave => $valor)
{
    $arrayPalabrasEspanolas[] = $clave;
}
//print_r($arrayPalabrasEspanolas);

if(isset($_POST["palabraUsuaria"])) {
    $palabra = $_POST["palabraUsuaria"];
    $palabra = strtolower($palabra);
    global $arrayTraduccion;

    if(in_array($palabra, $arrayPalabrasEspanolas))
    {
        $traduccion = $arrayTraduccion[$palabra];

        echo "La palabra <b>$palabra</b> en inglés se dice <b>$traduccion</b>. <br>";
    } else {
        echo "Esa palabra no se encuentra en el diccionario";
    }
    
}

?>


</html>