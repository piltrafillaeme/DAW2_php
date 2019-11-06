<html>
    <?php 
    $hora = $_POST["hora"];
    $minutos = $_POST["minutos"];
    $segundosTotal = 24 * 60 * 60;
    $segundosHoraUsuaria = $hora * 60 * 60;
    $segundosMinutosUsuaria = $minutos * 60;
    $segundosTotalUsuaria = $segundosHoraUsuaria + $segundosMinutosUsuaria;
    $segundosHastaMedianoche = $segundosTotal - $segundosTotalUsuaria;

    echo "Quedan ", $segundosHastaMedianoche, " segundos para medianoche.";
    
    ?>
</html>