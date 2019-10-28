<html>

<?php 
$dia = $_POST["dia"];
$mes = $_POST["mes"];

switch($mes) {
    case 1:
      if ($dia < 21) {
        $horoscopo = "capricornio";
      } else {
        $horoscopo = "acuario";
      }
      break;

    case 2:
      if ($dia < 20) {
        $horoscopo = "acuario";
      } else {
        $horoscopo = "piscis";
      }
      break;

    case 3:
      if ($dia < 21) {
        $horoscopo = "piscis";
      } else {
        $horoscopo = "aries";
      }
      break;

    case 4:
      if ($dia < 21) {
        $horoscopo = "aries";
      } else {
        $horoscopo = "tauro";
      }
      break;

    case 5:
      if ($dia < 20) {
        $horoscopo = "tauro";
      } else {
        $horoscopo = "géminis";
      }
      break;

    case 6:
      if ($dia < 22) {
        $horoscopo = "géminis";
      } else {
        $horoscopo = "cáncer";
      }
      break;

    case 7:
      if ($dia < 22) {
        $horoscopo = "cáncer";
      } else {
        $horoscopo = "Leo";
      }
      break;

    case 8:
      if ($dia < 24) {
        $horoscopo = "leo";
      } else {
        $horoscopo = "virgo";
      }
      break;

    case 9:
      if ($dia < 23) {
        $horoscopo = "virgo";
      } else {
        $horoscopo = "libra";
      }
      break;

    case 10:
      if ($dia < 23) {
        $horoscopo = "libra";
      } else {
        $horoscopo = "escorpio";
      }
      break;

    case 11:
      if ($dia < 23) {
        $horoscopo = "escorpio";
      } else {
        $horoscopo = "sagitario";
      }
      break;

    case 12:
      if ($dia < 21) {
        $horoscopo = "sagitario";
      } else {
        $horoscopo = "capricornio";
      }
      break;
  }

  echo "Su horóscopo es ", $horoscopo;

/* if ($dia >= 22 || $dia <= 20 && $mes == "diciembre" || $mes == "enero")
{
    echo "CAPRICORNIO";
}
else
{
    if (($dia >= 21 && $dia <= 19) && ($mes == "enero" || $mes == "febrero"))
    {
    echo "ACUARIO";
    }
    else
    {
        if ($dia >= 20 || $dia <= 20 && $mes == "febrero" || $mes == "marzo")
        {
        echo "PISCIS";
        }
        else
        {
            if ($dia >= 21 || $dia <= 20 && $mes == "marzo" || $mes == "abril")
            {
            echo "ARIES";
            }
            else
            {
                if ($dia >= 21 || $dia <= 21 && $mes == "abril" || $mes == "mayo")
                {
                echo "TAURO";
                }
                else
                {
                    if ($dia >= 22 || $dia <= 21 && $mes == "mayo" || $mes == "junio")
                    {
                    echo "GÉMINIS";
                    }
                    else
                    {
                        if ($dia >= 22 || $dia <= 23 && $mes == "junio" || $mes == "julio")
                        {
                        echo "CÁNCER";
                        }
                        else
                        {
                            if (($dia >= 24 || $dia <= 23) && ($mes == "julio" || $mes == "agosto"))
                            {
                            echo "LEO";
                            }
                            else
                            {
                                if ($dia >= 24 || $dia <= 23 && $mes == "agosto" || $mes == "septiembre")
                                {
                                echo "VIRGO";
                                }
                                else
                                {
                                    if ($dia >= 24 || $dia <= 23 && $mes == "septiembre" || $mes == "octubre")
                                    {
                                    echo "LIBRA";
                                    }
                                    else
                                    {
                                        if ($dia >= 24 || $dia <= 22 && $mes == "octubre" || $mes == "noviembre")
                                        {
                                        echo "ESCORPIO";
                                        }
                                        else
                                        {
                                            if ($dia >= 23 || $dia <= 21 && $mes == "noviembre" || $mes == "diciembre")
                                            {
                                            echo "ARIES";
                                            }
                                            else
                                            {
                                                echo "Ha introducido algún dato mal.";
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                } 
            }
        }
    }
} */


?>

</html>