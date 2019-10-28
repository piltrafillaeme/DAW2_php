<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7 - Tanda 2</title>
</head>
<body>
    <?php 
    $notaUno = $_POST["notaUno"];
    $notaDos = $_POST["notaDos"];
    $notaTres = $_POST["notaTres"];
    $notaTotal = $notaUno + $notaDos + $notaTres;
    $media = $notaTotal / 3;
    
    echo "Nota 1: ", $notaUno, "<br>";
    echo "Nota 2: ", $notaDos, "<br>";
    echo "Nota 3: ", $notaTres, "<br>";
    echo "Media: ", $media;
    ?>
</body>
</html>