<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 11 - Tanda 3</title>
</head>
<body>
    <?php
    if(!isset($_POST["numeroUsuaria"]))
    {
    ?>
    <p>Por favor, introduzca un número:</p>
        <form action="Ejercicio_T3_11.php" method="post">
        <input type="number" name="numeroUsuaria" autofocus>
        <input type="submit" value="Aceptar">
        </form>
    <?php
    }
    else
    {
        $numeroUsuaria = $_POST["numeroUsuaria"];
        echo "<table style='border-collapse: collapse'>";
        echo "<tr ><td style='text-align: center; border: 1px solid black'>Número Usuaria</td><td style='text-align: center; border: 1px solid black'>Cuadrado</td><td style='text-align: center; border: 1px solid black'>Cubo</td></tr>";

        for($i = 0; $i < 5; $i++)
        {
            echo "<tr>";
            echo "<td style='text-align: center; border: 1px solid black'>", $numeroUsuaria, "</td>";
            echo "<td style='text-align: center; border: 1px solid black'>", pow($numeroUsuaria,2), "</td>";
            echo "<td style='text-align: center; border: 1px solid black'>", pow($numeroUsuaria,3), "</td>";
            echo "</tr>";
            $numeroUsuaria++;
        }
        echo "</table>";
    }
    
    ?>
</body>
</html>