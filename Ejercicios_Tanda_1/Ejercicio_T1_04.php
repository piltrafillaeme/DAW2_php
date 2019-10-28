<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    /* echo $_POST["primerNumero"], " + ", $_POST["segundoNumero"], " = ", $_POST["primerNumero"] + $_POST["segundoNumero"], "<br>";
    echo $_POST["primerNumero"], " - ", $_POST["segundoNumero"], " = ", $_POST["primerNumero"] - $_POST["segundoNumero"], "<br>";
    echo $_POST["primerNumero"], " x ", $_POST["segundoNumero"], " = ", $_POST["primerNumero"] * $_POST["segundoNumero"], "<br>";
    echo $_POST["primerNumero"], " / ", $_POST["segundoNumero"], " = ", $_POST["primerNumero"] / $_POST["segundoNumero"], "<br>"; */

    $numeroUno = $_POST["primerNumero"];
    $numeroDos = $_POST["segundoNumero"];

    echo $numeroUno, " + ", $numeroDos, " = ", $numeroUno + $numeroDos, "<br>";
    echo $numeroUno, " - ", $numeroDos, " = ", $numeroUno - $numeroDos, "<br>";
    echo $numeroUno, " x ", $numeroDos, " = ", $numeroUno * $numeroDos, "<br>";
    echo $numeroUno, " / ", $numeroDos, " = ", $numeroUno / $numeroDos, "<br>";
    ?>
</body>
</html>