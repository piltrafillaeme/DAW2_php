<html>
    <head>
    <title>Ejercicio 7 -  Tanda 3</title>
    </head>
    <body>
        

<!-- Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras.
El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto 
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.-->

<?php 
$combinacionCorrecta = 1234;

    //si oportunidades no está definida y su valor es es null, se crea $oportunidades y se crea $combinacionUsuaria con
    //una combinación incorrecta 
    if (!isset($_POST['oportunidades']))
    {
        $combinacionUsuaria = 5555;
        $oportunidades = 3;
    }
    else
    {
        $oportunidades = $_POST['oportunidades'];
        $combinacionUsuaria = $_POST['combinacion'];
        $oportunidades--;
    }

    //pasamos a hacer las comprobaciones necesarias
    if ($combinacionUsuaria == $combinacionCorrecta)
    {
        echo "La caja fuerte se ha abierto satisfactoriamente.";
    }
    else
    {
        if($oportunidades == 0)
        {
            echo "Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.";
        }
        else
        {
            if($oportunidades == 3)
            {
                echo "Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.<br>";
                echo "Introduce un número de cuatro cifras.";
                echo '<form action="Ejercicio_T3_07.php" method="post">';
                echo '<input type="number" min="1000" max="9999" name="combinacion" autofocus>';
                echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
                echo '<input type="submit" value="Continuar">';
                echo '</form>';
            }
            else
            {
                echo "<strong>Lo siento, esa no es la combinación.</strong><br>";
                echo "Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.<br>";
                echo "Introduce un número de cuatro cifras.";
                echo '<form action="Ejercicio_T3_07.php" method="post">';
                echo '<input type="number" min="1000" max="9999" name="combinacion" autofocus>';
                echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
                echo '<input type="submit" value="Continuar">';
                echo '</form>';
            }
            
        }
    }
?>
</body>

</html>