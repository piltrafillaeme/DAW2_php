<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 2 - Tanda 2</title>
</head>
<body>
    <?php 
    $hora = $_POST["hora"];

    if ($hora >= 6 && $hora <= 12)
    {
        echo "¡Buenos días!";
    }
    else
    {
        if ($hora >= 13 && $hora <= 20)
        {
            echo "¡Buenas tardes!";
        }
        else
        {
            echo "¡Buenas noches!";
        }
    }
    ?>
</body>
</html>