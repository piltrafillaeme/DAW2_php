<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $diaSemanaNumero = $_POST["diaSemana"];

    switch ($diaSemanaNumero)
    {
        case 1:
        echo "A primera hora tiene clase de DWES";
        break;
        case 2:
        echo "A primera hora tiene clase de EIE";
        break;
        case 3:
        echo "A primera hora tiene clase de DIW";
        break;
        case 4:
        echo "A primera hora tiene clase de DWEC";
        break;
        case 5:
        echo "A primera hora tiene clase de DAW";
        break;
    }
    
    $diaSemanaTexto = $_POST["diaSemanaTexto"];
    $diaSemanaTexto = strtolower($diaSemanaTexto);
    $arrayAcentos = array("á", "é", "í", "ó","ú", "ü");
    $arraySinAcentos = array("a","e","i","o","u","u");
    $diaUsuarioArray = str_split($diaSemanaTexto);
    for ($i = 0; $i < strlen($diaSemanaTexto); $i++)
    {
        for ($j = 0; $j < sizeof($arrayAcentos); $j++)
        {
            if ($diaUsuarioArray[$i] == $arrayAcentos[$j])
            {
                $sustituir = array($i => $arraySinAcentos[$j]);
                $diaUsuarioArray = array_replace($diaUsuarioArray, $sustituir);
            }
        }
    }

    for ($j = 0; $j < sizeof($diaUsuarioArray); $j++)
        {
            echo $diaUsuarioArray[$j], "<br>";
        }
    
    echo $diaSemanaTexto;
    switch ($diaSemanaTexto)
    {
        case "lunes":
        echo "A primera hora tiene clase de DWES";
        break;
        case "martes":
        echo "A primera hora tiene clase de EIE";
        break;
        case "miercoles":
        echo "A primera hora tiene clase de DIW";
        break;
        case "jueves":
        echo "A primera hora tiene clase de DWEC";
        break;
        case "viernes":
        echo "A primera hora tiene clase de DAW";
        break;
        default:
        echo "¡No ha escrito correctamente alguno de los días!";
    }
    ?>
    
</body>
</html>