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
    
    $ValorEuros = 166.386;
    echo $_POST["pesetas"], " ptas / ", $ValorEuros, " € = ";
    echo round($_POST["pesetas"] / $ValorEuros, $precision = 2) , " euros";
    ?>
</body>
</html>